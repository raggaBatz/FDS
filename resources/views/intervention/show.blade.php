@extends('layouts.app')

@section('template_title')
    {{ $intervention->name ?? 'Detalle de intervención' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-sm-6">
                            <div class="">
                                <span class="card-title"><h2></h2></span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="">
                                <a class="btn btn-primary" href="{{ route('interventions.index') }}"> Regresar</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <h3>Centro</h3>
                            <h5>{{ $intervention->center->name }}</h5>
                        </div>
                        <br/>
                        <div class="form-group">
                            <h3>Grupo</h3>
                            <h5>{{ $intervention->group->name }}</h5>
                        </div>
                        <br/>
                        <div class="form-group">
                            <h3>Fecha de la intervención</h3>
                            <h5>{{ $intervention->intervention_date }}</h5>
                        </div>
                        <br/>
                        <div class="form-group">
                            <h3>Herramientas</h3>
                            <h5>{{ $intervention->tools }}</h5>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
