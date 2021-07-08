@extends('layout')

@section('content')
    
    <a href="{{ route('post.add') }}" class="btn btn-dark mb-3 mt-1 m-2 text-center">Add Post</a>
    @if (Session::has('post_delete'))
        <span>=>{{ Session::get('post_delete') }}</span>
    @endif
    <table class="table table-dark m-2">
        <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Age</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)
            <tr class="table-active">
                <th>{{$post->id}}</th>
                <td>{{$post->name}}</td>
                <td>{{$post->email}}</td>
                <td>{{$post->age}}</td>
                <td><a href="/edit-post/{{ $post->id }}" class="btn btn-primary">Edit</a>
                    <a href="/delete-post/{{ $post->id }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
          </tbody>
    </table>

@endsection