@extends('layouts.app')

@section('title', 'Create Comic')

@section('main-content')
<div class="container py-5">
    <div class="row">
        <div class="col-8 mx-auto">
            <h1 class='text-center mb-5'>
                Create a New Comic
            </h1>
   <form action="{{route('admin.store')}}" method='POST'>
   @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name='title'>
  </div>
  <div class="mb-3">
    <label for="thumb" class="form-label">Thumb</label>
    <input type="text" class="form-control" id="thumb" name='thumb'>
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <input type="text" class="form-control" id="description" name='description'>
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="number" class="form-control" id="price" name='price'>
  </div>
  <div class="mb-3">
    <label for="series" class="form-label">Series</label>
    <input type="text" class="form-control" id="series" name='series'>
  </div>
  <div class="mb-3">
    <label for="sale_date" class="form-label">Sale Date</label>
    <input type="text" class="form-control" id="sale_date" name='sale_date'>
  </div>
  <div class="mb-3">
    <label for="type" class="form-label">Type</label>
    <input type="text" class="form-control" id="type" name='type'>
  </div>
  <button type="submit" class="btn btn-primary">Generate New Comic</button>
  <button type="reset" class="btn btn-warning">Reset</button>
</form>
        </div>
    </div>
</div>
@endsection