@extends('layout')
@section('title' , 'Computer')
@section('content')
<div class="container">
    <p class="text-success"> {{$message}}</p>
    <br>
    <h4>{{$computer->name}} :</h4>
    <ul>
    <li>name : {{$computer->name}}</li>
    <li>Origin : {{$computer->origin}}</li>
    <li>Price : {{$computer->price}}$</li>
    <br>
    </ul> 
    <a class="btn btn-danger" href="{{route('computers.delete' , ['id' => $computer->id])}}">Delete</a>
     <a class="btn btn-primary" href="{{route('computers.modifier', ['id' => $computer->id])}}">Update</a>
</div>

<style>
    .container {
    margin-top: 110px;
    width: 300px;
    height: 130px;
}
</style>
@endsection