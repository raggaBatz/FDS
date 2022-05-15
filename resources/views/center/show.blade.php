@extends('layouts.app')

@section('template_title')
    {{ $center->name ?? 'Show Center' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Center</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('centers.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $center->name }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $center->address }}
                        </div>
                        <div class="form-group">
                            <strong>Centertype Id:</strong>
                            {{ $center->centertype_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
