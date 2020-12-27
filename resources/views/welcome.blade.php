@extends('layouts.main')

@section('content')
<div class="container">
<h1>Home Page</h1>
@if(session('successMsg'))
<div class="alert alert-success" role="alert">
 {{session('successMsg')}}
</div>
@endif
<table class="table  table-hover table-stripped">
  <thead>
    <tr class="table-primary">
      <th scope="col">#</th>
      <th scope="col">Name of the Student</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($student as $st)
    <tr>
      <th scope="row">{{$st->id}}</th>
      <td>{{$st->studentname}}</td>
      <td>{{$st->email}}</td>
      <td>{{$st->phone}}</td>
      <td>Edit || Delete</td>
     
    </tr>
  @endforeach
   
  </tbody>
</table>
</div>
@endsection