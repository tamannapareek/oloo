@extends('layouts.app')
@section('title','add-user')
@section('content')
   <div class="row page-title-header">
              <div class="container mt-4">
              @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
              @endif
              <div class="card">
                 @foreach ($errors->all() as $error)
                <div class="alert alert-warning" role="alert">
                  {{ $error }}
                </div>
                @endforeach

                 
                      <div></div>
                  
             
                <div class="card-header text-center font-weight-bold">
               Edit  Post Form Example
                </div>
                <div class="card-body">
                   <form  method="POST" action="{{url('/edit/'.$posts->id)}}">
                   @csrf
                    @method('PUT')
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" id="title" name="title" value="{{ old('title') ?? $posts->title }}"  class="form-control" required="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Description</label>
                      <textarea name="description" class="form-control" required="">{{ old('description') ?? $posts->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
            </div>  
            </div>
@endsection