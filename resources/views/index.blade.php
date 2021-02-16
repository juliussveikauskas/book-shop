@extends('layouts.app')
@section('content')
    <div class="row mb-4">
        <div class="col-4">
            <form>
                <div class="form-row">
                    <div class="col">
                        <input type="text" name="search" class="form-control" value="{{!empty($keyword) ? $keyword : ''}}" placeholder="Search by book title or author">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="books-list">
        <div class="row">
            @foreach($books as $book)
                <div class="col-2dot4 books-list__book">
                    <div class="card">
                        @if($book->isNew())
                            <span class="card-new">New</span>
                        @endif
                        @if(!empty($book->discount))
                            <span class="card-discount">{{$book->discount}} %</span>
                        @endif
                        <img class="card-img-top" src="{{asset('storage/'.$book->image)}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$book->name}}</h5>
                            <p class="card-text">Author:
                                @foreach($book->authors as $author)
                                    <span>{{$author->name}}
                                        @if($loop->remaining >= 1)
                                            ,
                                        @endif</span>
                                @endforeach
                            </p>
                            @if(empty($book->discount))
                                <p class="card-text">Price: {{$book->price}}€</p>
                            @else
                                <p class="card-text">Price:
                                    <span class="old-price">{{$book->price}}€</span>
                                    <span class="discounted-price">{{$book->discountedPrice}}€</span>
                                </p>
                            @endif
                            <a href="{{route('books.show', $book)}}" class="btn btn-dark card-link">Show more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="text-right">
        <a class="page-navigation" href="{{ $books->previousPageUrl()}}"><i class="fas fa-angle-double-left"></i></a>
        <a class="page-navigation" href="{{ $books->nextPageUrl() }}"><i class="fas fa-angle-double-right"></i></a>
    </div>
@endsection
