@extends('layouts.app')

@section('template_title')
    {{ $group->name ?? 'Show Group' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Group</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('groups.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Grouptype Id:</strong>
                            {{ $group->grouptype_id }}
                        </div>
                        <div class="form-group">
                            <strong>Manager Id:</strong>
                            {{ $group->manager_id }}
                        </div>
                        <div class="form-group">
                            <strong>Submanager Id:</strong>
                            {{ $group->submanager_id }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $group->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
