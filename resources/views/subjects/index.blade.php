@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-2"> All Subjects</h2>
    <a href="{{ route('subjects.create') }}" class="btn btn-primary float-right">Add Subject</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Subject Name</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($subjects as $subject)
        <tr>
            <td>{{ $subject->id}}</td>
            <td>{{ $subject->subjectName}}</td>
            <td>
                <form action="{{ route('subjects.destroy', $subject->id )}}" method="POST" style="display: inline-block;">
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

