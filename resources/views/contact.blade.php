@extends('layouts/app')


@section('container')
    @if(count($people))
        @foreach($people as $person)
            <p style="color:#000; font-weight: bold;">{{$person}}</p>
        @endforeach
    @endif
@stop

