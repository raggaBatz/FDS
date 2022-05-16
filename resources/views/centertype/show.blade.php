@extends('layouts.app')

@section('template_title')
    {{ $centertype->name ?? 'Show Centertype' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Centertype</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('centertypes.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $centertype->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
