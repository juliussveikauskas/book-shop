@extends('layouts.app')
@section('content')
    <h1 class="mt-2">Your books List</h1>
    <div class="row">
        <div class="col-xs-12 my-3 mx-3">
            <a href="{{route('user.books.create')}}" class="btn btn-success">Add book</a>
        </div>
    </div>
    @if(count($books))
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Status</th>
                <th scope="col">&nbsp</th>
                <th scope="col">&nbsp</th>
            </tr>
            </thead>
            <tbody>
            @foreach($books as $book)
                <tr>
                    <th scope="row">{{$loop->index}}</th>
                    <td>{{$book->name}}</td>
                    <td><span class="badge @if($book->isActive) badge-success @else badge-danger @endif">{{strtoupper($book->status)}}</span></td>
                    <td>
                        <a href="{{route('user.books.edit', [$book])}}" class="btn btn-secondary btn-sm admin-edit-btn">Edit</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$books->links()}}
    @endif
@endsection
