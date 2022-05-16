@extends('layouts.app')

@section('template_title')
    {{ $interventiondetail->name ?? 'Show Interventiondetail' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Interventiondetail</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('interventiondetails.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Intervention Id:</strong>
                            {{ $interventiondetail->intervention_id }}
                        </div>
                        <div class="form-group">
                            <strong>Volunteer Id:</strong>
                            {{ $interventiondetail->volunteer_id }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $interventiondetail->description }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
