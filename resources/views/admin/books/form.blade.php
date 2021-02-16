@extends('layouts.admin')
@section('content')
    @if(empty($book))
        <h1 class="mt-2">Add book</h1>
    @else
        <h1 class="mt-2">Update book</h1>
    @endif
    <form method="POST" action="  @if(!empty($book)) {{route('admin.books.update', [$book])}}@else {{route('admin.books.store')}}   @endif" enctype="multipart/form-data">
        @if(!empty($book))
            {{ method_field('PUT') }}
        @endif
        @csrf
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
        <div class="form-row">
            <div class="form-group col-md-7">
                <label for="name">Title</label>
                <input type="text" name="name" class="form-control" value="{{!empty($book) ? $book->name : ''}}" id="name" placeholder="Enter book title">
            </div>
            <div class="form-group col-md-3">
                <label for="written_at">Year written</label>
                <input id="written_at" name="written_at" class="datepicker form-control" value="{{!empty($book) ? $book->written_at : ''}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="authors">Authors</label>
                <select multiple id="authors" name="authorIds[]" class="form-control js-chosen" data-placeholder="Choose authors...">
                    @foreach($authors as $author)
                        <option value="{{$author->id}}" @if(!empty($book) && $book->authors->contains($author->id)) selected @endif>{{$author->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-5">
                <label for="genres">Genres</label>
                <select multiple id="genres" name="genreIds[]" class="form-control js-chosen" data-placeholder="Choose genres...">
                    @foreach($genres as $genre)
                        <option value="{{$genre->id}}" @if(!empty($book) && $book->genres->contains($genre->id)) selected @endif>{{$genre->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="price">Price</label>
                <input type="number" step=".01" class="form-control" id="price" name="price" value="{{!empty($book) ? $book->price : ''}}">
            </div>
            <div class="form-group col-md-2">
                <label for="discount">Discount</label>
                <input type="number" class="form-control" id="discount" name="discount" value="{{!empty($book) ? $book->discount : ''}}">
            </div>
            <div class="form-group col-md-2">
                <label for="image">Choose book cover:</label>
                <input type="file" id="image" name="image" accept="image/png, image/jpeg">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="status">Status</label>
                <select id="status" name="status" class="form-control js-chosen">
                    <option value="inactive" selected>Inactive</option>
                    <option value="active">Active</option>
                    <option value="unconfirmed">Unconfirmed</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-10">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection
