@extends('pages.base')

@section('content')
@if (session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
@endif
<table class="table table-bordered table-striped table-sm">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Course name</th>
            <th>Enrollment Date</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($enrollments as $enrollment):?>
            <tr>
                <td>{{$enrollment->students->firstname}}</td>
                <td>{{$enrollment->courses->coursename}}</td>
                <td>{{$enrollment->enrollment_date}}</td>
                <td class="text-center">
                    <a href="{{url('enrollments/'.$enrollment->id)}}" class="btn btn-primary">edit</a>
                </tr>
            <?php endforeach;?>
    </tbody>
</table>

@endsection
