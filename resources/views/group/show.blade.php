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
                            <span class="card-title"><h3>Información de grupo</h3></span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('groups.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Tipo de grupo:</strong>
                            {{ $group->grouptype->name }}
                        </div>
                        <div class="form-group">
                            <strong>ID Encargado</strong>
                            {{ $group->manager_id }}
                        </div>
                        <div class="form-group">
                            <strong>Encargado</strong>
                            {{ $manager->pseudonym }} - {{ $manager->last_names }}, {{ $manager->names }}
                        </div>
                        {{-- <div class="form-group">
                            <strong>Sub Encargado</strong>
                            {{ $group->submanager_id }}
                        </div> --}}
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
