@extends('layouts.app')

@section('template_title')
    {{ $grouptype->name ?? 'Show Grouptype' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Grouptype</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('grouptypes.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $grouptype->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
