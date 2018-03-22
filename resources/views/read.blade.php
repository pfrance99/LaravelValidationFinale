@extends('layouts.base')

@section('title', 'Insérer')

@section('content')
    <table>
        <tr>
            <th>Artiste</th>
            <th>Album</th>
            <th>Date</th>
            <th>Genre</th>
            <th>Stock</th>
            <th>Supprimer</th>
            <th>Modifier</th>
        </tr>
        @foreach($albums as $album)
        <tr>
        <td>{{ $album->artist }}</td>
        <td>{{ $album->name }}</td>
        <td>{{ $album->date }}</td>
        <td>@foreach($album->genres as $product)
                    {{ $product->name }}
            @endforeach
            </td>
        <td>{{ $album->stock }}</td>
        <td> {!! Form::open(['url' => '/deleted', 'method' => 'post']) !!}
                {!! Form::hidden('id', $album->id) !!}
                {!! Form::submit('X') !!}
            {!! Form::close() !!}</td>
        <td>{!! Form::open(['url' => '/update', 'method' => 'post']) !!}
                {!! Form::hidden('id', $album->id) !!}
                {!! Form::submit('M') !!}
            {!! Form::close() !!}</td>
        </tr>
        @endforeach
    </table>
@stop