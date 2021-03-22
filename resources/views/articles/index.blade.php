@extends('adminlte::page')
@section('content')
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Author</th>
                <th scope="col">Title</th>
                <th scope="col">Preview</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
             @foreach ($articles->sortByDesc('created_at') as $article)
             <tr>
                <th scope="row">{{$article->id}}</th>
                <th scope="row">{{$article->users->name}}</th>
                <td>{{$article->title}}</td>
                <td>{{Str::words($article->content, 10)}}</td>
                <td><a href="/articles/{{$article->id}}" class="btn btn-primary">show</a></td>
              </tr>
             @endforeach
            </tbody>
          </table>
    </div>
@endsection