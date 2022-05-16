@extends('layouts.app')

@section('template_title')
    {{ $intervention->name ?? 'Show Intervention' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Intervention</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('interventions.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Center Id:</strong>
                            {{ $intervention->center_id }}
                        </div>
                        <div class="form-group">
                            <strong>Group Id:</strong>
                            {{ $intervention->group_id }}
                        </div>
                        <div class="form-group">
                            <strong>Intervention Date:</strong>
                            {{ $intervention->intervention_date }}
                        </div>
                        <div class="form-group">
                            <strong>Tools:</strong>
                            {{ $intervention->tools }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
