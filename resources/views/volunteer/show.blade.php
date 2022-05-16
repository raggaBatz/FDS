@extends('layouts.app')

@section('template_title')
    {{ $volunteer->name ?? 'Show Volunteer' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Volunteer</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('volunteers.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Generation Id:</strong>
                            {{ $volunteer->generation_id }}
                        </div>
                        <div class="form-group">
                            <strong>Constellation Id:</strong>
                            {{ $volunteer->constellation_id }}
                        </div>
                        <div class="form-group">
                            <strong>Group Id:</strong>
                            {{ $volunteer->group_id }}
                        </div>
                        <div class="form-group">
                            <strong>Pseudonym:</strong>
                            {{ $volunteer->pseudonym }}
                        </div>
                        <div class="form-group">
                            <strong>Pseudonym Plain:</strong>
                            {{ $volunteer->pseudonym_plain }}
                        </div>
                        <div class="form-group">
                            <strong>Names:</strong>
                            {{ $volunteer->names }}
                        </div>
                        <div class="form-group">
                            <strong>Last Names:</strong>
                            {{ $volunteer->last_names }}
                        </div>
                        <div class="form-group">
                            <strong>Phone:</strong>
                            {{ $volunteer->phone }}
                        </div>
                        <div class="form-group">
                            <strong>Birthday:</strong>
                            {{ $volunteer->birthday }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $volunteer->email }}
                        </div>
                        <div class="form-group">
                            <strong>Contact Name:</strong>
                            {{ $volunteer->contact_name }}
                        </div>
                        <div class="form-group">
                            <strong>Contact Phone:</strong>
                            {{ $volunteer->contact_phone }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $volunteer->status }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
