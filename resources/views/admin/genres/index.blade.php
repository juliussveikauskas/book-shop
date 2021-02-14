@extends('layouts.admin')
@section('content')
    <h1 class="mt-2">Genres List</h1>
    <div class="row">
        <div class="col-xs-12 my-3 mx-3">
            <a href="{{route('admin.genre.create')}}" class="btn btn-success">Create genre</a>
        </div>
    </div>
    @if(count($genres))
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
            @foreach($genres as $genre)
                <tr>
                    <th scope="row">{{$loop->index}}</th>
                    <td>{{$genre->name}}</td>
                    <td>
                        <a href="{{route('admin.genre.edit', [$genre])}}" class="btn btn-secondary btn-sm admin-edit-btn">Edit</a>
                        @if(!count($genre->books))
                            <form action="{{route('admin.genre.delete', [$genre])}}" method="POST">
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
        {{$genres->links()}}
    @endif
@endsection
