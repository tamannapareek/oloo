@extends('layouts.app')
@section('title','Login')
@section('content')
  <!-- contact section -->
 <section class="layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div class="form">
            <div class="form-toggle"></div>
            <div class="form-panel one">
              <div class="form-header">
                <h1>Account Login</h1>
              </div>
              <div class="form-content">
                @if(session('status'))
                <div class="alert alert-danger">
                    {{ session('status') }}
                </div>
              @endif
               @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }} </div>
              @endforeach
                <form method="post">
                   @csrf
                  <div class="form-group"><label for="username">Email</label><input type="text" id="username" name="email" required="required" /></div>
                  <div class="form-group"><label for="password">Password</label><input type="password" id="password" name="password" required="required" /></div>
                  <div class="form-group"><button type="submit">Log In</button></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
