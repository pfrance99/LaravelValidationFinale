@extends('layouts.base')

@section('title', 'Insérer')

@section('content')
    <div class="content2">
        <table class="tableinsert">
            <tr>
                <th>Genre</th>
                <th>Supprimer</th>
            </tr>
            <?php $i=0; ?>
            @foreach($genres as $genre)
            <tr>
                <td {!! $i%2==0 ? "class='td1'" : "class='td2'"!!}>{{ $genre->name }}</td>
                <td {!! $i%2==0 ? "class='td1'" : "class='td2'"!!}> {!! Form::open(['url' => '/deletedGenre', 'method' => 'post']) !!}
                    {!! Form::hidden('id', $genre->id) !!}
                    {!! Form::submit('X',  ['class' => 'delete ReadButon']) !!}
                {!! Form::close() !!}</td>
            </tr>
            <?php $i++; ?>
            @endforeach
        </table>
    {!! Form::open(['url' => '/createdGenre', 'method' => 'post']) !!}
    <h2>Insérer un Genre</h2>
        <div class="labelInputClass2">
            {!! Form::label('Ajouter un genre : ') !!}
            {!! Form::text('name', null, ['required', 'class' => 'input']) !!}
        </div>
        <div class="submitCentred">
        {!! Form::submit('Valider', ['class' => 'submitButton'] ) !!}
        </div>
    {!! Form::close() !!}   
    </div>
@stop