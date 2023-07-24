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
                </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection