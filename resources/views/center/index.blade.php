@extends('layouts.app')

@section('template_title')
    Center
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <h1>Centros</h1>
                            </span>

                             <div class="float-right">
                                @if (Auth::user()->level > 4)
                                <a href="{{ route('centers.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo') }}
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

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Nombre</th>
										<th>Direccion</th>
										<th>Tipo de centro</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($centers as $center)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $center->name }}</td>
											<td>{{ $center->address }}</td>
											<td>{{ $center->centertype->name }}</td>

                                            <td>
                                                <form action="{{ route('centers.destroy',$center->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('centers.show',$center->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    @if (Auth::user()->level > 4)
                                                    <a class="btn btn-sm btn-success" href="{{ route('centers.edit',$center->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $centers->links() !!}
            </div>
        </div>
    </div>
@endsection
