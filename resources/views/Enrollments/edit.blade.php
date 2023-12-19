@extends('pages.base')

@section('content')

<h1>
    Update User
</h1>
<div class="row">
    <div class="col-md-5">
        <form action="{{url('enrollments/'.$enrollment->id)}}" method="POST">
            @csrf
            <div class="form-group mt-2">
                <label for="firstname">First Name</label>
                <input type="text" name="firstname" id="firstname" placeholder="Enter firstname..." class="form-control" value="{{$enrollment->firstname}}">
                @error('firstname')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="coursename">Course name</label>
                <input type="text" name="coursename" id="coursename" placeholder="Enter coursename..." class="form-control" value="{{$enrollment->coursename}}">
                @error('coursename')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="enrollment_date">Enrollment Date</label>
                <input type="text" name="enrollment_date" id="enrollment_date" placeholder="Enter enrollment_date..." class="form-control" value="{{$enrollment->enrollment_date}}">
                @error('age')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
            <button class="btn btn-primary" type="submit">
                    Update Enrollment
            </button>
            </div>

        </form>
    </div>
</div>

@endsection
