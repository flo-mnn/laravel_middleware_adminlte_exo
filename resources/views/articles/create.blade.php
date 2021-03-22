@extends('adminlte::page')
@section('content')
<section class="container">
    <form action="/articles/" method="POST">
        @csrf
        <div class="form-group">
          <input type="text" class="form-control" placeholder="your title" name="title">
        </div>
        <div class="form-group">
          <textarea class="form-control" rows="15" name="content" placeholder="Your article"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">
            submit
        </button>
      </form>
</section>
@endsection