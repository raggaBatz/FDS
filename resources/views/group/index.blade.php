@extends('layouts.app')

@section('template_title')
    Group
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            {{-- <span id="card_title">
                                {{ __('Group') }}
                            </span> --}}
                            <h3>Grupos</h3>

                             <div class="float-right">
                                <a href="{{ route('groups.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>No</th>

										<th>Tipo de grupo</th>
										{{-- <th>Manager Id</th>
										<th>Submanager Id</th> --}}
										<th>Nombre</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($groups as $group)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $group->grouptype->name }}</td>
											{{-- <td>{{ $group->manager_id->name }}</td>
											<td>{{ $group->submanager_id }}</td> --}}
                                            {{-- <td>{{ $manager->pseudonym }} - {{ $manager->last_names }}, {{ $manager->names }}</td> --}}
											<td>{{ $group->name }}</td>

                                            <td>
                                                <form action="{{ route('groups.destroy',$group->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('groups.show',$group->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('groups.edit',$group->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $groups->links() !!}
            </div>
        </div>
    </div>
@endsection
