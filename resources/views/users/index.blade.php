@extends('adminlte::page')
@section('content')
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">User Name</th>
                <th scope="col">edit</th>
                <th scope="col">del</th>
              </tr>
            </thead>
            <tbody>
             @foreach ($users as $item)
             
             <tr>
                <th scope="row">{{$item->id}}</th>
                <th scope="row">{{$item->name}}</th>
                <td>
                    @can('user-edit', $item)
                    <a href="/users/{{$item->id}}/edit" class="btn btn-primary">edit</a>
                    @endcan
                </td>
                <td>
                    @can('user-delete',$item)
                    <form action="/users/{{$item->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            del
                        </button>
                    </form>
                    @endcan
                </td>
              </tr>
             @endforeach
            </tbody>
          </table>
    </div>
@endsection