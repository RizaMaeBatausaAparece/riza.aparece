@extends('pages.base')

@section('content')
    <table class="table table-bordered table-striped table-sm">
            <thead>
                <tr>
                    <th>Students</th>
                    <th>Grade</th>
                    <th>Grade_Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($grades as $grade):?>
                    <tr>
                        <td>{{ $grade->students->firstname }}</td>
                        <td>{{$grade->grade}}</td>
                        <td>{{$grade->grade_date}}</td>
                    <?php endforeach;?>
            </tbody>
        </table>

@endsection
