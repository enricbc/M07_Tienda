@extends('layouts.app')


@section('content')
@if(count($errors)>0)
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
@endif
  <form action="{{route('store_post_path')}}" method="post">
    {{csrf_field()}}
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" name="title" class="form-control" value="{{old('title')}}">
    </div>
    <div class="form-group">
      <label for="description">Description:</label>
      <textarea rows="5" name="description" class="form-control" >{{old('description')}}</textarea>
    </div>
    <div class="form-group">
      <label for="url">Url:</label>
      <input type="text" name="url" class="form-control" value="{{old('url')}}">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>

@endsection
