@extends('layouts.app')

@section('template_title')
    {{ $generation->name ?? 'Show Generation' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title"><h3>Mostrar</h3></span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('generations.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $generation->name }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $generation->description }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
