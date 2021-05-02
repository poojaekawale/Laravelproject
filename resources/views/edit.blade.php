@extends('layout')
@section('title','Modify Client')
@section('content')
   
    <div class="row"  >
        <div class="col-lg-12 margin-tb">
            <div class="pull-left"style="margin-top:7%;margin-left:40%">
                <h2>Edit Client</h2>
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
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  <div style="margin-left:40%;">
    <form action="{{ route('clients.update',$client->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Client Name:</strong>
                    <input type="text" name="name" value="{{ $client->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Mobile No:</strong>
                    <input type="text" name="mobileno" value="{{ $client->mobileno }}" class="form-control" placeholder="Mobile No">

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Email Id:</strong>
                    <input type="text" name="email" value="{{ $client->email }}" class="form-control" placeholder="Email Id">

                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong> Address:</strong>
                        <textarea name="address" class="form-control" >{{ $client->address }}</textarea>
                    </div>
                </div>
            </div>
          <br>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 text-center">
              <button type="submit" class="btn btn-dark">Submit</button>
            </div>
        </div>
   
    </form>
</div>
@endsection