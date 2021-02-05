@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-2"> All Students</h2>
    <a href="{{ route('students.create') }}" class="btn btn-primary float-right">Add Student</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Student Name</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->id}}</td>
            <td>{{ $student->studentName}}</td>
            <td> <a class="btn btn-success " href="{{ route('students.edit',$student->id)}}">Update</a>
                <form action="{{ route('students.destroy', $student->id )}}" method="POST"
                      style="display: inline-block;">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="btn btn-xs btn-danger del_btn"
                           value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>

    </table>
</div>
@endsection
