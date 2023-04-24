@extends('layout')
@section('title' , 'Create computer')
@section('content')
<div class="container">
    <h4>Create computers :</h4>
    <br>

{{-- the errors messages of the form --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

{{-- the errors messages of the form --}}
    @csrf
    <form action="{{route('computers.store')}}" method="post">
      @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Name :</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
          {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Origine :</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="origin">
            {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Price :</label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="price">
            {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
          </div>
        <br>
        <button type="submit" class="btn btn-primary">ADD</button> 
        <br>
        <br>

        <p class="text-success"> {{$message}}</p>
        {{-- placeholder="Enter email" --}}
      </form>

      {{-- @if (session()->has('message'))
        <div class ="alert alert-success">
          {{session()->get('message')}}
        </div>
      @endif --}}
</div>

<style>
    .container {
    margin-top: 110px;
    width: 300px;
    height: 130px;
}
</style>
@endsection