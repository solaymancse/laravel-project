@extends('layout.master')
@section('content')
<div class="container">
    <form action="{{url('create-person')}}" method="POST">
      @csrf
        <h1 class="text-center">Create New Person</h1>
        <div class="form-group">
          <label for="exampleInputEmail1">Full Name</label>
          <input type="text" name="name" class="form-control" placeholder="Enter Name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email"  name="email" class="form-control"  placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Phone</label>
          <input type="text"  name="phone" class="form-control" placeholder="Phone">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Date of Birthday</label>
          <input type="date"  name="birth_date" class="form-control" placeholder="Birthday">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Address</label>
          <input type="text" name="address"  class="form-control" placeholder="Full Address">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
    
@endsection