@extends('layout')
@section('title' , 'Update Computer')
@section('content')
<div class="container">
    <h4>Update computers :</h4>
    <br>
    <form action="{{route('update', ['id' => $computer->id])}}" method="get">
      @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Name :</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{$computer->name}}">
          {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Origine :</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="origin" value="{{$computer->origin}}">
            {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Price :</label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="price" value="{{$computer->price}}">
            {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
          </div>
        <br>
        <button type="submit" class="btn btn-primary">Update</button> 
        <br>
        <br>

        <p class="text-success"> {{$message}}</p>
     
      </form>

</div>

<style>
    .container {
    margin-top: 110px;
    width: 300px;
    height: 130px;
}
</style>
@endsection