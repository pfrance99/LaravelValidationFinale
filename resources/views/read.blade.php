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
            <td {!! $i%2==0 ? "class='td1'" : "class='td2'"!!}><span class={{"stockValue" . $i }}>{{ $album->stock }}</span><script> // OUI JE SAIS LE SCRIPT DANS LE PHP C'EST PAS BEAU MAIS J'AI PAS TROUVE COMMENT FAIRE AUTREMENT (a cause de ma variable qui fait php->jquery)
                    i = '<?php echo $i; ?>';
                    $(document).ready(function (){
                        for(j=0;j<=i;j++){
                            console.log($('.stockValue' + j).text());
                            if($('.stockValue' + j).text() >= 10) {
                                $('.stockValue' + j).parent().css('background-color', 'rgba(0, 255, 13, 0.8)');
                            } else if($('.stockValue' + j).text() >= 5 ){
                                $('.stockValue' + j).parent().css('background-color', 'rgba(255, 251, 0, 0.863)');
                            } else if($('.stockValue' + j).text() >= 1 ){
                                $('.stockValue' + j).parent().css('background-color', 'rgba(255, 166, 0, 0.8)');
                            } else {
                                $('.stockValue' + j).parent().css('background-color', 'rgba(255, 0, 0, 0.7)');
                            }
                        }
                    })
                    </script></td>
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