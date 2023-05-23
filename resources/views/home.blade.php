@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                            <div class="card-header">Módulo</div>
                            <div class="card-body">
                                <h5 class="card-title">Categorías</h5>
                                <p class="card-text">Crear publicaciones</p>
                            </div>
                            <a href="{{ route('login') }}" class="btn btn-outline-info">Ir al módulo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
