@extends('layout.master')
@section('content')
<div class="container">
    <form>
        <h1 class="text-center">Create New Person</h1>
        <div class="form-group">
          <label for="exampleInputEmail1">Full Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Date of Birthday</label>
          <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Birthday">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
    
@endsection