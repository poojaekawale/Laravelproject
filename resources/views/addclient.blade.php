@extends('layout') 
@section('title','New Client')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left"style="margin-top:7%;margin-left:40%">
            <h2>Add New Client</h2>
        </div>
    </div>
    <div class="col-lg-6 margin-tb">
        <div class="pull-right"style="margin-left:200%">
            <a class="btn btn-primary" href="{{ route('clients.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        </strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 <div style="margin-left:40%;">
<form action="{{ route('clients.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Client Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6  col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Mobile No:</strong>
                <input type="text" name="mobileno" class="form-control" placeholder="Mobile No">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong> Email Id:</strong>
                <input type="text" name="email" class="form-control" placeholder="Email Id">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong> Address:</strong>
                <textarea name="address" class="form-control" ></textarea>
            </div>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                <button type="submit" class="btn btn-dark">Submit</button>
        </div>
    </div>
   
</form>
</div>
@endsection
   