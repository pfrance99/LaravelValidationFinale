@extends('layouts.base')

@section('title', 'Insérer')

@section('content')
    {!! Form::open(['url' => '/updated', 'method' => 'post']) !!}
        {!! Form::hidden('id', $album->id) !!}
        {!! Form::label('Nom de l\'artiste :') !!}
        {!! Form::text('artist', $album->artist) !!}
        {!! Form::label('Titre de l\'album') !!}
        {!! Form::text('name', $album->name) !!}
        {!! Form::label('Date de parution (années)') !!}
        {!! Form::number('date', $album->date) !!}
        {!! Form::label('Nombre en stock') !!}
        {!! Form::number('stock', $album->stock) !!}
        {!! Form::submit('Valider') !!}
    {!! Form::close() !!}
@stop