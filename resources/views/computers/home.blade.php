@extends('layout')
@section('title' , 'Home')
@section('content')
<div class="container">

    <p class="text-danger"> {{$message}}</p>

    <h4>All computers :</h4>
    @foreach ( $computers as $computer)
    <ul>
    <li><a class="link-secondary" href="{{route('computers.show' , $computer->id)}}">{{$computer->name}}</a></li>
    </ul> 
    @endforeach
</div>

<style>
    .container {
    margin-top: 110px;
    width: 300px;
    height: 130px;
}
</style>
@endsection