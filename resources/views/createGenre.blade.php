@extends('layouts.base')

@section('title', 'Insérer')

@section('content')
    {!! Form::open(['url' => '/createdGenre', 'method' => 'post']) !!}
        {!! Form::label('Ajouter un genre') !!}
        {!! Form::text('name') !!}
        {!! Form::submit('Valider') !!}
    {!! Form::close() !!}
@stop