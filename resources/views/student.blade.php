@extends("app")


  @section("title","Student Page")

  @section("content")
    <h1>Hello I am student Page</h1>
    @forelse($stud as $student)
        <h4>{{$student->studentname}}</h4>
    @empty
        <h4>No students</h4>
    @endforelse
  @endsection 