@extends('layouts.report')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                <h1>Reporte - Cantidad de intervenciones por centro</h1>
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
                                        <th>Dirección</th>
										<th>Cantidad</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($centers as $center)
                                        <tr>
                                            <td>{{ $center->id }}</td>

											<td>{{ $center->name }}</td>

                                            <td>{{ $center->address }}</td>

                                            <td>{{ $center->interventions_count }}</td>
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

