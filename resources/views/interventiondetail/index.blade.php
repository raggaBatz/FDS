@extends('layouts.app')

@section('template_title')
    Interventiondetail
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Interventiondetail') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('interventiondetails.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

										<th>Intervention Id</th>
										<th>Volunteer Id</th>
										<th>Description</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($interventiondetails as $interventiondetail)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $interventiondetail->intervention_id }}</td>
											<td>{{ $interventiondetail->volunteer_id }}</td>
											<td>{{ $interventiondetail->description }}</td>

                                            <td>
                                                <form action="{{ route('interventiondetails.destroy',$interventiondetail->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('interventiondetails.show',$interventiondetail->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('interventiondetails.edit',$interventiondetail->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $interventiondetails->links() !!}
            </div>
        </div>
    </div>
@endsection
