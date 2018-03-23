@extends('layouts.base')

@section('title', 'Insérer')

@section('content')
    <div class="content">
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
        <?php $i=0; ?>
        @foreach($albums as $album)
        <tr>
            <td {!! $i%2==0 ? "class='td1'" : "class='td2'"!!}>{{ $album->artist }}</td>
            <td {!! $i%2==0 ? "class='td1'" : "class='td2'"!!}>{{ $album->name }}</td>
            <td {!! $i%2==0 ? "class='td1'" : "class='td2'"!!}>{{ $album->date }}</td>
            <td {!! $i%2==0 ? "class='td1'" : "class='td2'"!!}>
                @foreach($album->genres as $product)
                    {{ $product->name }}
                @endforeach</td>
            <td {!! $i%2==0 ? "class='td1'" : "class='td2'"!!}><span class="stockValue">{{ $album->stock }}</span></td>
            <td {!! $i%2==0 ? "class='td1'" : "class='td2'"!!}> {!! Form::open(['url' => '/deleted', 'method' => 'post']) !!}
                {!! Form::hidden('id', $album->id) !!}
                {!! Form::submit('X',  ['class' => 'delete ReadButon']) !!}
            {!! Form::close() !!}</td>
            <td {!! $i%2==0 ? "class='td1'" : "class='td2'"!!}>{!! Form::open(['url' => '/update', 'method' => 'post']) !!}
                {!! Form::hidden('id', $album->id) !!}
                {!! Form::submit('M', ['class' => 'ReadButon']) !!}
            {!! Form::close() !!}</td>
        </tr>
        <?php $i++; ?>
        @endforeach
    </table>
    </div>
@stop