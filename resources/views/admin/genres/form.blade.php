@extends('layouts.admin')
@section('content')
    @if(empty($genre))
        <h1 class="mt-2">Add genre</h1>
    @else
        <h1 class="mt-2">Update genre</h1>
    @endif
    <form method="POST" action="  @if(!empty($genre)) {{route('admin.genre.update', [$genre])}}@else {{route('admin.genre.store')}}   @endif">
        @if(!empty($genre))
            {{ method_field('PUT') }}
        @endif
        @csrf
        <div class="row my-1 mx-1">
            <div class="col-xs-6">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input required type="text" value="{{!empty($genre) ? $genre->name : ''}}" class="form-control" id="name" name="name" placeholder="Enter genre name">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection
