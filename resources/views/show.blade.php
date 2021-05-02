@extends('layout') 
@section('title','Clients')
@section('content')
<br><br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>ALL Clients</h2>
            </div>
            <div class="pull-right" style="margin-left:80%;">
                <a class="btn btn-dark" href="{{ route('clients.create') }}"> Create New Client</a>
            </div>
        </div>
    </div>
    <br><br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
  
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Mobile No</th>
            <th>Email Id</th>
            <th>Address</th>

            
            <th width="280px">Action</th>
        </tr>
        @foreach ($clients as $client)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $client->name }}</td>
            <td>{{ $client->mobileno }}</td>
            <td>{{ $client->email }}</td>
            <td>{{ $client->address }}</td>
            <td>
                <form action="{{ route('clients.destroy',$client->id) }}" method="POST">
   
    
                    <a class="btn btn-dark" href="{{ route('clients.edit',$client->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-dark">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $clients->links() !!}
      
@endsection