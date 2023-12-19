@extends('pages.base')

@section('content')

<style>
h1 {
    font-size: 2em;
    text-align: center;
    margin-top: 30px;
    transition: transform 0.3s ease-in-out;
}

h1:hover {
    transform: scale(1.1); /* Zoom effect on hover */
}
</style>
<div class="home">
    <h1>Welcome Students!</h1>
</div>
@endsection
