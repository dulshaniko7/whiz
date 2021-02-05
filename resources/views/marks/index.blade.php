@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header text-white" style="background-color: #0d1a26;">
                <div class="row">
                    <div class="col-sm-6">
                        <h4 class="header-title">Add Marks</h4>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('marks')}}">
                    @csrf

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="student_name">Student Name</label>
                                @include('partials.students')
                            </div>

                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="subject_name">Subject Name</label>
                                @include('partials.subjects')
                            </div>

                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="marks">Marks</label>
                                <input type="text" class="form-control" name="marks" id="marks"
                                       placeholder="mark" value="{{ old('marks', '')}}">
                            </div>

                        </div>

                    </div>
                    <hr class="mt-1 mb-2">

                    <div class="col-md-6">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-add-row">Save</button>
                            <button class="btn btn-dark" type="reset">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
