@extends('layouts.admin')
@section('content')
    <form method="POST" action="  @if(!empty($author)) {{route('admin.author.update', [$author])}}@else {{route('admin.author.store')}}   @endif">
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
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection
