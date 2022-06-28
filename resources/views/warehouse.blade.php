@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">{{ __('Menu') }}</div> --}}
                <div class="card-header"><h3>Reporteria</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <ul class="list-group">

                        <li class="list-group-item list-group-item-primary">
                            <a class="nav-link" href="{{ route('pdf1') }}">{{ __('Reporte mensual de intervenciones ') }}</a>
                        </li>
                        <!-- <li class="list-group-item list-group-item-secondary">
                            <a class="nav-link" href="{{ route('pdf1') }}">{{ __('Reporte de voluntarios activos ') }}</a>
                        </li> -->
                        <li class="list-group-item list-group-item-success">
                            <a class="nav-link" href="{{ route('pdf2') }}">{{ __('Reporte mensual de intervenciones por grupo') }}</a>
                        </li>
                        <!-- <li class="list-group-item list-group-item-danger">
                            <a class="nav-link" href="{{ route('pdf2') }}">{{ __('Reporte de centros sin intervención asignada') }}</a>
                        </li> -->
                        <li class="list-group-item list-group-item-warning">
                            <a class="nav-link" href="{{ route('pdf3') }}">{{ __('Reporte mensual de intervenciones por centro') }}</a>
                        </li>
                        <!-- <li class="list-group-item list-group-item-info">
                            <a class="nav-link" href="{{ route('pdf2') }}">{{ __('Reporte de actividades en intervención') }}</a>
                        </li> -->
                        <!-- <li class="list-group-item list-group-item-dark">
                            <a class="nav-link" href="{{ route('pdf2') }}">{{ __('Reporte de capacitaciones') }}</a>
                        </li> -->
                        <!-- <li class="list-group-item list-group-item-primary">
                            <a class="nav-link" href="{{ route('pdf2') }}">{{ __('Reporte de asistencia de voluntarios en intervenciones') }}</a>
                        </li> -->
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
