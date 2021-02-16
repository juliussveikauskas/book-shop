@extends('layouts.admin')
@section('content')
    @if(empty($author))
        <h1 class="mt-2">Add author</h1>
    @else
        <h1 class="mt-2">Update author</h1>
    @endif
    <form method="POST" action="  @if(!empty($author)) {{route('admin.authors.update', [$author])}}@else {{route('admin.authors.store')}}   @endif">
        @if(!empty($author))
            {{ method_field('PUT') }}
        @endif
        @csrf
        <div class="row my-1 mx-1">
            <div class="col-xs-6">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input required type="text" value="{{!empty($author) ? $author->name : ''}}" class="form-control" id="name" name="name" placeholder="Enter author full name">
                </div>
            </div>
        </div>
        <a href="{{route('admin.authors')}}" class="btn btn-danger">Cancel</a>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection
