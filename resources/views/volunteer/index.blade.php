@extends('layouts.app')

@section('template_title')
    Volunteer
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <h1>Voluntarios</h1>
                            </span>

                             <div class="float-right">
                                <a href="{{ route('volunteers.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo') }}
                                </a>
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
                                        <th>ID</th>

										<th>Generacion</th>
										<th>Constelacion</th>
										<th>Grupo</th>
										<th>Pseudonimo</th>
										{{-- <th>Pseudonym Plain</th> --}}
										<th>Nombres</th>
										<th>Apellidos</th>
										{{-- <th>Phone</th>
										<th>Birthday</th>
										<th>Email</th> --}}
										{{-- <th>Contact Name</th>
										<th>Contact Phone</th>
										<th>Status</th> --}}

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($volunteers as $volunteer)
                                        <tr>
                                            {{-- <td>{{ ++$i }}</td> --}}
                                            <td>{{ $volunteer->id }}</td>
											<td>{{ $volunteer->generation->name }}</td>
											<td>{{ $volunteer->constellation->name }}</td>
											<td>{{ $volunteer->group->name }}</td>
											<td>{{ $volunteer->pseudonym }}</td>
											{{-- <td>{{ $volunteer->pseudonym_plain }}</td> --}}
											<td>{{ $volunteer->names }}</td>
											<td>{{ $volunteer->last_names }}</td>
											{{-- <td>{{ $volunteer->phone }}</td>
											<td>{{ $volunteer->birthday }}</td>
											<td>{{ $volunteer->email }}</td>
											<td>{{ $volunteer->contact_name }}</td>
											<td>{{ $volunteer->contact_phone }}</td>
											<td>{{ $volunteer->status }}</td> --}}

                                            <td>
                                                <form action="{{ route('volunteers.destroy',$volunteer->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('volunteers.show',$volunteer->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('volunteers.edit',$volunteer->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $volunteers->links() !!}
            </div>
        </div>
    </div>
@endsection
