@extends('layouts.app')

@section('title', 'Trainers')

@section('content')

    @include('common.success')

    <a href="/trainers/create/" class="btn btn-primary top-space">Agregar</a>

    <div class="row">
    @foreach($trainers as $trainer)
            <div class="col-sm">

    <div class="card text-center" style="width: 18rem; margin-top: 70px;">
        <img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;"  class="card-img-top rounded-circle mx-auto d-block" src="images/{{$trainer->avatar}}" alt="">
        <div class="card-body">
            <h5 class="card-title">{{$trainer->name}}</h5>
            <p class="card-text">Información sobre el entrenador Pokemon para saber mas información pulsa el boton Ver más.</p>
            <a href="/trainers/{{$trainer->slug}}" class="btn btn-primary">Ver más...</a>
        </div>
    </div>

            </div>
    @endforeach
    </div>

    <a href="/" class="btn btn-primary top-space">Volver al menu principal</a>

@endsection