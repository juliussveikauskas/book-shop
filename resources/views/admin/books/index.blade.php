@extends('layouts.admin')
@section('content')
    <h1 class="mt-2">Books List</h1>
    <div class="row">
        <div class="col-xs-12 my-3 mx-3">
            <a href="{{route('admin.books.create')}}" class="btn btn-success">Create book</a>
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
                    <td>{{$book->name}}</td>
                    <td>
                        @if($book->isUnconfirmed)
                            <form action="{{route('admin.books.confirm', [$book])}}" method="POST">
                                @csrf
                                <button class="btn btn-warning btn-sm" type="submit">Confirm</button>
                            </form>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('admin.books.edit', [$book])}}" class="btn btn-secondary btn-sm admin-edit-btn">Edit</a>
                        @if(!count($book->genres) || !count($book->authors))
                            <form action="{{route('admin.books.destroy', [$book])}}" method="POST">
                                {{ method_field('DELETE') }}
                                @csrf
                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$books->links()}}
    @endif
@endsection
