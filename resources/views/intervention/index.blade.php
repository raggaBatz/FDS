@extends('layouts.app')

@section('template_title')
    Intervention
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    {{-- <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <h1>Reportes</h1>
                            </span>

                             <div class="float-right">
                                @if (Auth::user()->level > 1)
                                <a href="{{ route('pdf1') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear') }}
                                </a>
                                @endif
                              </div>
                        </div>
                    </div> --}}
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <h1>Intervenciones</h1>
                            </span>

                             <div class="float-right">
                                @if (Auth::user()->level > 1)
                                <a href="{{ route('interventions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nueva') }}
                                </a>
                                @endif
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body"
                    >
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        {{-- <th>Tipo</th> --}}
										<th>Centro</th>
										<th>Grupo</th>
										<th>Fecha</th>
										{{-- <th>Herramientas</th> --}}

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($interventions as $intervention)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            {{-- <td>{{ $intervention->center->centertype->name }}</td> --}}
											<td>{{ $intervention->center->name }}</td>
											<td>{{ $intervention->group->name }}</td>
											<td>{{ $intervention->intervention_date }}</td>
											{{-- <td width="700px">{{ $intervention->tools }}</td> --}}

                                            <td>
                                                <form action="{{ route('interventions.destroy',$intervention->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('interventions.show',$intervention->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    @if (Auth::user()->level > 1)
                                                    <a class="btn btn-sm btn-success" href="{{ route('interventions.edit',$intervention->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                    @endif
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $interventions->links() !!}
            </div>
        </div>
    </div>
@endsection
