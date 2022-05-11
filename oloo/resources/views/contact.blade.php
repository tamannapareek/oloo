@extends('layouts.app')
@section('title','Contact')
@section('content')
  <!-- contact section -->






  <section class="contact_section layout_padding">
    <div class="container">
      <div class="row">
        <div class=" col-md-4">
          <div class="contact_box">
            <h4 class="">Submit Ticket</h4>
        
             @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
              @endif
            <form action="" method="post" enctype="multipart/form-data">
                    @csrf
              <div class="file-input-container">
                <input type="file" class="sm-input-file"  name="image" id="sm-ip-1"/>
                <label class="for-sm-input-file" for="sm-ip-1">Add File</label>
                <span class="span-text" id="file-name"></span>
              </div>
              <textarea class="form-control" type="text" name="msg" placeholder="Message" rows="7"></textarea>
              <div>
                <button type="submit" class="btn-blue">
                  Submit
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class=" col-md-8">
          <img src="{{asset('public/images/bright.jpg')}}" class="h-100 w-100">
          </div>
        </div>
      </div>

    </div>
    </div>
  </section>
  <!-- end contact section -->




@endsection
