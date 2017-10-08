@extends('master')

@section('content')
    @if($beers)
        @foreach($beers as $beer)
            <li>{{ $beer->name }}</li>
        @endforeach
    @endif
@stop
