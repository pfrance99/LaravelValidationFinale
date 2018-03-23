@extends('layouts.base')

@section('title', 'Insérer')

@section('content')
    <div class="content">

    {!! Form::open(['url' => '/created', 'method' => 'post']) !!}
    <h2>Insérer un album</h2>

        <div class="labelInputClass">
            {!! Form::label('Nom de l\'artiste :') !!}
            {!! Form::text('artist', null, ['required', 'class' => 'input']) !!}
        </div>
        <div class="labelInputClass">
            {!! Form::label('Titre de l\'album :') !!}
            {!! Form::text('name', null, ['required', 'class' => 'input']) !!}
        </div>
        <div class="labelInputClass">
            {!! Form::label('Date de parution (années) :') !!}
            {!! Form::number('date', null, ['required', 'class' => 'input']) !!}
        </div>
        <div class="labelInputClass">
            {!! Form::label('Nombre en stock :') !!}
            {!! Form::number('stock', null, ['required', 'class' => 'input']) !!}
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