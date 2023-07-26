@extends('layouts.app')

@section('title','Comic Selected')


@section('main-content')
<div class="wrapper bg-dark">
  <div class="container">
      <div class="row">
      <h1 class="text-center text-white mt-5"> <strong>{{$comic->title}}</strong></h1>
          <div class="col-8 mx-auto">
              <div class="card my-5">
                <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
                <div class="card-body">
                  <p class="card-text"> <strong>ID: </strong>{{$comic->id}}</p>
                  <p class="card-text"> <strong>Description: </strong>{{$comic->description}}</p>
                  <p class="card-text"> <strong>Price: </strong>{{$comic->price}}</p>
                  <p class="card-text"> <strong>Series: </strong>{{$comic->series}}</p>
                  <p class="card-text"> <strong>Type: </strong>{{$comic->type}}</p>
                  <p class="card-text"> <strong>Sale Date: </strong>{{$comic->sale_date}}</p>
                  <p class="card-text"> <strong>Artists: </strong>{{$comic->artists}}</p>
                  <p class="card-text"> <strong>Writers: </strong>{{$comic->writers}}</p>
                  <button class='col-2 mx-auto btn btn-primary'>
                    <a class='text-white text-decoration-none' href="{{route('admin.edit', $comic->id)}}">EDIT</a>
                  </button>
                  <form class='d-inline' action="{{ route ('admin.destroy', $comic->id) }}" method='POST'>
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-warning">Delete Comic</button>
                  </form>
                </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection