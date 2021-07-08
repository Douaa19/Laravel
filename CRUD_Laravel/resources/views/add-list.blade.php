@extends('layout')

@section('content')
    
<main class="row">
    <div class="vid col-3"></div>
    <form class="form-group col-6 text-center mt-3" action="{{ route('save.post') }}" method="POST">
        @if (Session::has('post-add'))
            <span>{{ Session::get('post-add') }}</span>
        @endif
        @csrf
        <div class="name mt-3">
            <label for="name">Name: </label>
            <input type="text" name="name" id="name">
        </div>
        <div class="email mt-3">
            <label for="email">Email: </label>
            <input type="email" name="email" id="name">
        </div>
        <div class="age mt-3">
            <label for="age">Age: </label>
            <input type="text" name="age" id="age">
        </div>
        <input type="submit" value="Submit" class="mt-3">
    </form>
    <div class="vid col-3"></div>
</main>

@endsection