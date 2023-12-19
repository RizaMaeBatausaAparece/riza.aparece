@extends('pages.base')

@section('content')
    <h1>
        Create New User
    </h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('courses/create')}}" method="POST">
                @csrf
                <div class="form-group mt-2">
                    <label for="coursename">Course name</label>
                    <input type="text" name="coursename" id="coursename" placeholder="Enter coursename..." class="form-control">
                    @error('coursename')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="description">Description</label>
                    <input type="text" name="description" id="description" placeholder="Enter description..." class="form-control">
                    @error('description')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="start_date">Start Date</label>
                    <input type="text" name="start_date" id="start_date" placeholder="Enter start_date..." class="form-control">
                    @error('start_date')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="end_date">End Date</label>
                    <input type="text" name="end_date" id="end_date" placeholder="Enter end_date..." class="form-control">
                    @error('end_date')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                    <button class="btn btn-primary">
                        Add Course
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
