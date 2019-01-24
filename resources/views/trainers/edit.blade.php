@extends('layouts.app')

@section('title', 'Trainers Edit')

@section('content')

    @include('common.errors')

    {!! Form::model($trainer, ['route' => ['trainers.update', $trainer], 'method' => 'PUT', 'files' => true]) !!}

    @include('trainers.form')

    {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
    <a href="/trainers/{{$trainer->slug}}" class="btn btn-danger">Cancelar</a>

    {!! Form::close() !!}


<!--    <form class="form-group" method="Post" action="/trainers/{$trainer->slug}}" enctype="multipart/form-data">
        #method('PUT')
        #csrf
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="name" value="{$trainer->name}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Avatar</label>
            <input type="file" name="avatar">
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>

    </form> -->
@endsection