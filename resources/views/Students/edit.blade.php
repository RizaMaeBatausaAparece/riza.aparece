@extends('pages.base')

@section('content')


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModal">Delete Student - {{$student->firstname}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{url('/students/delete/' . $student->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-body">
            Are you sure you want to delete this user?
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Delete User</button>
            </div>
        </form>
      </div>
    </div>
  </div>

@if (session('message'))
<div class="success">{{session('message')}}</div>
@endif
    <h1>
        Update User
    </h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('students/'.$student->id)}}" method="POST">
                @csrf
                <div class="form-group mt-2">
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" id="firstname" placeholder="Enter firstname..." class="form-control" value="{{$student->firstname}}">
                    @error('firstname')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" id="lastname" placeholder="Enter lastname..." class="form-control" value="{{$student->lastname}}">
                    @error('lastname')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="age">Age</label>
                    <input type="text" name="age" id="age" placeholder="Enter age..." class="form-control" value="{{$student->age}}">
                    @error('age')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="Enter email..." class="form-control" value="{{$student->email}}">
                    @error('email')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="birthdate">Birthdate</label>
                    <input type="text" name="birthdate" id="birthdate" placeholder="Enter birthdate..." class="form-control" value="{{$student->birthdate}}">
                    @error('birthdate')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Delete
                    </button>
                <button class="btn btn-primary" type="submit">
                        Update User
                </button>
                </div>

            </form>
        </div>
    </div>

@endsection
