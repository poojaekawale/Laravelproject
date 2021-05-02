<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CRM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Login</a>
        </li>
       
        <li class="nav-item-right">
        <a class="nav-link" href="/register">Registration</a>
        </li>
      
       
      </ul>
    </div>
  </div>
</nav>
@if (Session('message'))
        <div class="alert alert-info">
            {{session('message')}}
        </div>
    @endif
<div class="container" style="Margin-left:30%;margin-top:10%;">
    <div class="row">
        <div class="col-md-4 col-md-offset-3">
        <form action="login" method="POST">
        @csrf
            <h1 style="margin-left:35%;">Login</h1>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email"placeholder="Email">
            </div>
            <br>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password"id="exampleInputPassword1" placeholder="Password">
            </div>
            <br>
            <button type="submit" style="margin-left:35%;"class="btn btn-dark">Login</button>
        </form>
        </div>
    </div>
</div>


