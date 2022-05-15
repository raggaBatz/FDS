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
                                {{ __('Volunteer') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('volunteers.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        
										<th>Generation Id</th>
										<th>Constellation Id</th>
										<th>Group Id</th>
										<th>Pseudonym</th>
										<th>Pseudonym Plain</th>
										<th>Names</th>
										<th>Last Names</th>
										<th>Phone</th>
										<th>Birthday</th>
										<th>Email</th>
										<th>Contact Name</th>
										<th>Contact Phone</th>
										<th>Status</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($volunteers as $volunteer)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $volunteer->generation_id }}</td>
											<td>{{ $volunteer->constellation_id }}</td>
											<td>{{ $volunteer->group_id }}</td>
											<td>{{ $volunteer->pseudonym }}</td>
											<td>{{ $volunteer->pseudonym_plain }}</td>
											<td>{{ $volunteer->names }}</td>
											<td>{{ $volunteer->last_names }}</td>
											<td>{{ $volunteer->phone }}</td>
											<td>{{ $volunteer->birthday }}</td>
											<td>{{ $volunteer->email }}</td>
											<td>{{ $volunteer->contact_name }}</td>
											<td>{{ $volunteer->contact_phone }}</td>
											<td>{{ $volunteer->status }}</td>

                                            <td>
                                                <form action="{{ route('volunteers.destroy',$volunteer->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('volunteers.show',$volunteer->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('volunteers.edit',$volunteer->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
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
