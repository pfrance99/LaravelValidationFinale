@extends('layouts.base')

@section('title', 'Insérer')

@section('content')
    <div class="content">

    {!! Form::open(['url' => '/updated', 'method' => 'post']) !!}
    <h2>Modifier l'album "{{ $album->name }}"</h2>
        {!! Form::hidden('id', $album->id) !!}
        <div class="labelInputClass">
            {!! Form::label('Nom de l\'artiste :') !!}
            {!! Form::text('artist', $album->artist, ['required', 'class' => 'input']) !!}
        </div>
        <div class="labelInputClass">
            {!! Form::label('Titre de l\'album :') !!}
            {!! Form::text('name', $album->name, ['required', 'class' => 'input']) !!}
        </div>
        <div class="labelInputClass">
            {!! Form::label('Date de parution (années) :') !!}
            {!! Form::number('date', $album->date, ['required', 'class' => 'input']) !!}
        </div>
        <div class="labelInputClass">
            {!! Form::label('Nombre en stock :') !!}
            {!! Form::number('stock', $album->stock, ['required', 'class' => 'input']) !!}
        </div>
        <h3>Genres de l'album</h3>
        <div class="WrapCheckBox">
            @foreach($genres as $key => $genre)
            <div class="labelInputCheckBox">
                {!! Form::checkbox("genre_id[]", $key, false, ['class' => 'inputCheckBox']) !!}
                {!! Form::label($genre) !!}
            </div>
            @endforeach()
        </div>
        {!! Form::submit('Valider') !!}
    {!! Form::close() !!}
    </div>
@stop