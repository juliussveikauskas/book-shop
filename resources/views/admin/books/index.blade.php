@extends('layouts.admin')
@section('content')
    <h1 class="mt-2">Books List</h1>
    <div class="row">
        <div class="col-xs-12 my-3 mx-3">
            <a href="{{route('admin.book.create')}}" class="btn btn-success">Create book</a>
        </div>
    </div>
    @if(count($books))
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">&nbsp</th>
                <th scope="col">&nbsp</th>
            </tr>
            </thead>
            <tbody>
            @foreach($books as $book)
                <tr>
                    <th scope="row">{{$loop->index}}</th>
                    <td>{{$book->name}}
                    <td>
                        <a href="{{route('admin.book.edit', [$book])}}" class="btn btn-secondary btn-sm admin-edit-btn">Edit</a>
                        <form action="{{route('admin.book.delete', [$book])}}" method="POST">
                            {{ method_field('DELETE') }}
                            @csrf
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$books->links()}}
    @endif
@endsection
