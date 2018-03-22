@extends('layouts.base')

@section('title', 'Insérer')

@section('content')
    {!! Form::open(['url' => '/created', 'method' => 'post']) !!}
        {!! Form::label('Nom de l\'artiste :') !!}
        {!! Form::text('artist') !!}
        {!! Form::label('Titre de l\'album') !!}
        {!! Form::text('name') !!}
        {!! Form::label('Date de parution (années)') !!}
        {!! Form::number('date') !!}
        {!! Form::label('Nombre en stock') !!}
        {!! Form::number('stock') !!}
        @foreach($genres as $key => $genre)
        {!! Form::label($genre) !!}
        {!! Form::checkbox("genre_id[]", $key) !!}
        @endforeach()
        {!! Form::submit('Valider') !!}
    {!! Form::close() !!}
@stop