@extends('layouts.app')
@section('title','add-post')
@section('content')
      
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
              <div class="container mt-4">
              @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
              @endif
              <div class="card">
                <div class="card-header text-center font-weight-bold">
                  Laravel 8 - Add Blog Post Form Example
                </div>
                <div class="card-body">
                  <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}" enctype="multipart/form-data">
                   @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" id="title" name="title" class="form-control" required="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Description</label>
                      <textarea name="description" class="form-control" required=""></textarea>
                    </div>
                   <div class="form-group">
                      <label for="exampleInputEmail1">Image</label>
                      <input type="file" name="image" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
            </div>  
            </div>
            <!-- Page Title Header Ends-->
          
         
          

@endsection