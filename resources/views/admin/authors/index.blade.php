@extends('layouts.admin')
@section('content')
    <h1 class="mt-2">Authors List</h1>
    <div class="row">
        <div class="col-xs-12 my-3 mx-3">
            <a href="{{route('admin.author.create')}}" class="btn btn-success">Create author</a>
        </div>
    </div>
    @if(count($authors))
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
            @foreach($authors as $author)
                <tr>
                    <th scope="row">{{$loop->index}}</th>
                    <td>{{$author->name}}</td>
                    <td>
                        <a href="{{route('admin.author.edit', [$author])}}" class="btn btn-secondary btn-sm admin-edit-btn">Edit</a>
                        <form action="{{route('admin.author.delete', [$author])}}" method="POST">
                            {{ method_field('DELETE') }}
                            @csrf
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$authors->links()}}
    @endif
@endsection
