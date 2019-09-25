@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Escritorio</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="jumbotron text-center">
                        <img src="{{ asset(Auth::user()->photo) }}" width="120px" alt="" style="margin-bottom: 10px;">
                        <h2><strong>{{ Auth::user()->fullname }}</strong><br>
                            <h4>
                                @if (Auth::user()->role == 'Admin')
                                    Administrador
                                @elseif(Auth::user()->role == 'editor') 
                                    Editor   
                                @endif
                            </h4>
                        </h2> 
                    </div>
                    <hr>
                    <div class="btn-group-vertical d-block">
                        <a href="{{ url('users') }}" class="btn btn-outline-dark btn-lg">
                            <i class="fa fa-users"></i>
                            Módulo de Usuarios
                        </a>
                         <a href="{{ url('categorias') }}" class="btn btn-outline-dark btn-lg">
                            <i class="fa fa-list"></i>
                            Módulo de Categorias
                        </a>
                         <a href="{{ url('articles') }}" class="btn btn-outline-dark btn-lg">
                            <i class="fa fa-file"></i>
                            Módulo de Articulos
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
