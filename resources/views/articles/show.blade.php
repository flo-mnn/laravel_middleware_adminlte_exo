@extends('adminlte::page')
@section('content')
    <div class="container">
        <a href="/articles/{{$article->id}}/edit" class="btn btn-primary ml-auto">edit</a>
        <h1 class="text-primary text-capitalize">{{$article->title}}</h1>
        <p class="text-muted">written by <span class="text-primary"><em>{{$article->users->name}}</em></span></p>
        <hr>
        <p class="mt-5">{{$article->content}}</p>
    </div>
@endsection