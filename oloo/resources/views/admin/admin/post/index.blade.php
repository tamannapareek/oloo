@php use App\Models\Ticket; @endphp
@extends('admin.layouts.app')
@section('title','ticket-list')
@section('content')
            <!-- Page Title Header Starts-->
<div class="row page-title-header">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Ticket List</h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table_wrapper table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Person Type</th>
                                <th>Image</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($tickets as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->ticket->name }}</td>
                                <td>{{ $item->ticket->email }}</td>
                                <td>{{ $item->ticket->phone_number }}</td>
                                <td>{{ $item->ticket->selectperson }}</td>
                                <td><img src="{{ asset('public/images/'.$item->image)}}"></td>
                                <td>{{ $item->description }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
            <!-- Page Title Header Ends-->
          

@endsection