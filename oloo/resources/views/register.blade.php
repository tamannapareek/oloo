@extends('layouts.app')
@section('title','Register')
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
                <h1>Register Account</h1>
              </div>
              <div class="form-content">
                 @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
              @endif
               @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }} </div>
              @endforeach
                <form action="{{URL::to('/store')}}" method="post">
                  @csrf
                  <div class="form-group"><label for="username">Name</label><input type="text" id="username" name="name" required="required" /></div>
                  <div class="form-group"><label for="password">Password</label><input type="password" id="password" name="password" required="required" /></div>
                  <div class="form-group"><label for="cpassword">Phone Number</label><input type="text" id="cpassword" name="phone_number" required="required" /></div>
                  <div class="form-group"><label for="email">Email Address</label><input type="email" id="email" name="email" required="required" /></div>
                  <div class="form-group">
                  <label for="email">Select Type</label>
                  <select name="selectperson"  id="email"  required="required" >
                   <option selected>Select Type</option>
                   <option value="customer">customer</option>
                   <option value="distributor">distributor</option>
                  </select>
                  </div>
                  <div class="form-group"><button type="submit">Register</button></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- info section -->
 


@endsection
