@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">{{ __('Menu') }}</div> --}}
                <div class="card-header"><h3>Menu principal</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- {{ __('You are logged in!') }} --}}

                    @if (Auth::check())
                        <ul class="list-group">

                            <li class="list-group-item list-group-item-primary">
                                <a class="nav-link" href="{{ route('centers.index') }}">{{ __('Centros') }}</a>
                            </li>
                            <li class="list-group-item list-group-item-secondary">
                                <a class="nav-link" href="{{ route('interventions.index') }}">{{ __('Intervenciones') }}</a>
                            </li>
                            @if (Auth::user()->level > 2)
                                <li class="list-group-item list-group-item-success">
                                    <a class="nav-link" href="{{ route('generations.index') }}">{{ __('Generaciones') }}</a>
                                </li>
                                <li class="list-group-item list-group-item-danger">
                                    <a class="nav-link" href="{{ route('constellations.index') }}">{{ __('Constelaciones') }}</a>
                                </li>
                                <li class="list-group-item list-group-item-warning">
                                    <a class="nav-link" href="{{ route('groups.index') }}">{{ __('Grupos') }}</a>
                                </li>
                            @endif
                            @if (Auth::user()->level > 3)
                                <li class="list-group-item list-group-item-info">
                                    <a class="nav-link" href="{{ route('volunteers.index') }}">{{ __('Voluntarios') }}</a>
                                </li>
                                <li class="list-group-item list-group-item-ligth">
                                    <a class="nav-link" href="{{ route('users.index') }}">{{ __('Usuarios') }}</a>
                                </li>
                            @endif
                            @if (Auth::user()->level > 4)
                                <li class="list-group-item list-group-item-dark">
                                    <a class="nav-link" href="{{ route('centertypes.index') }}">{{ __('Tipos de centro') }}</a>
                                </li>
                                <li class="list-group-item list-group-item-primary">
                                    <a class="nav-link" href="{{ route('grouptypes.index') }}">{{ __('Tipos de grupo') }}</a>
                                </li>
                            @endif
                            <li class="list-group-item list-group-item-secondary">
                                <a class="nav-link" href="{{ url('/warehouse') }}">{{ __('Reporteria') }}</a>
                            </li>
                        </ul>
                    @endif

                    {{-- <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                          <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">List group item heading</h5>
                            <small> </small>
                          </div>
                          <p class="mb-1"> </p>
                          <small> </small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                          <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Header</h5>
                            <small class="text-muted"></small>
                          </div>
                          <p class="mb-1">Modulo de administración para información de </p>
                          <small class="text-muted">.</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                          <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">List group item heading</h5>
                            <small class="text-muted">3 days ago</small>
                          </div>
                          <p class="mb-1">Some placeholder content in a paragraph.</p>
                          <small class="text-muted">And some muted small print.</small>
                        </a>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
