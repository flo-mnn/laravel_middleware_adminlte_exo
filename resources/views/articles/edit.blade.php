@extends('adminlte::page')
@section('content')
<section class="container">
    <form action="/articles/{{$article->id}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
          <input type="text" class="form-control" placeholder="your title" name="title" value="{{$article->title}}">
        </div>
        <div class="form-group">
          <textarea class="form-control" rows="15" name="content" placeholder="Your article">{{$article->content}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">
            submit
        </button>
      </form>
</section>
@endsection