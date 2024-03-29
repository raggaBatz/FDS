@extends('layouts.report')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                <h1>Reporte - Intervenciones en el mes</h1>
                            </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div>
                            <table>
                                <thead>
                                    <tr>
                                        <th>No</th>

										<th>Centro</th>
										<th>Grupo</th>
                                        <th>Tipo de grupo</th>
										<th>Fecha</th>
										<th>Herramientas</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($interventions as $intervention)
                                        <tr>
                                            <td>{{ $intervention->id }}</td>

											<td>{{ $intervention->center->name }}</td>
											<td>{{ $intervention->group->name }}</td>
                                            <td>{{ $intervention->group->grouptype->name }}</td>
											<td>{{ $intervention->intervention_date }}</td>
											<td>{{ $intervention->tools }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

