@extends('layouts.app')
@section('title','ticket-list')
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
                <h1>Ticket List</h1>
              </div>
              <div class="form-content">
                 <table class="table table-bordered table-striped">
                            @php $i=1; 
                            $countdata = auth()->user()->ticket->count();
                           @endphp
                           @if($countdata!=0)
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                         
                            @foreach(auth()->user()->ticket as $item)
                            <tr> 
                             <td>{{ $i++; }}</td>    
                                <td><img src="{{ asset('public/images/'.$item->image)}}" style="height: 47px;"></td>
                                <td>{{ $item->description }}</td>
                            </tr>
                            @endforeach
                            @else
                            <div class="text-center">
                            <img src="{{ asset('public/images/images.png')}}">
                            <h3 >No Ticket Has found . please Create Ticket</h3>
                            </div>
                            @endif
                        </tbody>
                    </table>
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
