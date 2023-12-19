@extends('pages.base')

@section('content')
    <h1>
        Create New User
    </h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('students/create')}}" method="POST">
                @csrf
                <div class="form-group mt-2">
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" id="firstname" placeholder="Enter firstname..." class="form-control">
                    @error('firstname')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" id="lastname" placeholder="Enter lastname..." class="form-control">
                    @error('lastname')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="age">Age</label>
                    <input type="text" name="age" id="age" placeholder="Enter age..." class="form-control">
                    @error('age')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="Enter email..." class="form-control">
                    @error('email')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="birthdate">Birthdate</label>
                    <input type="text" name="birthdate" id="birthdate" placeholder="Enter birthdate..." class="form-control">
                    @error('birthdate')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                    <button class="btn btn-primary">
                        Add Student
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
