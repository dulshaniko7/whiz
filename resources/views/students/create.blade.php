@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header text-white" style="background-color: #0d1a26;">
                <div class="row">
                    <div class="col-sm-6">
                        <h4 class="header-title">Add New Student</h4>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('students.store')}}">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Student Name</label>
                                <input type="text" class="form-control" name="studentName" id="name"
                                       placeholder="Student Name" value="">
                            </div>
                            @if($errors->has('studentName'))
                            <span class="help-block text-danger"  role="alert">{{ $errors->first('studentName') }}</span>
                            @endif
                        </div>


                    </div>
                    <hr class="mt-1 mb-2">

                    <div class="col-md-6">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-add-row">Save</button>
                            <button class="btn btn-dark" id='reset' type="reset">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

@endsection

<script>
    const name = document.querySelector('#name');
    const reset = document.querySelector('#reset');
    reset.addEventListener('click',function () {
        name.innerText('');
    })
</script>
