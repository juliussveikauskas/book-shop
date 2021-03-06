@extends('layouts.app')
@section('content')
    <section class="mb-5">

        @if(!empty($message))
            <div class="row">
                <div class="col">
                    <div class="alert alert-success" role="alert">
                        {{$message}}
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-md-6 mb-4 mb-md-0">
                <div>
                    <div class="row mx-1">
                        <div class="col-12 mb-0">
                            @if(!empty($book->image))
                                <img src="{{asset('storage/'.$book->image)}}">
                            @else
                                <img class="card-img-top" src="{{asset('images/default.png')}}" alt="Card image cap">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h1>{{$book->name}}</h1>
                <p><span class="mr-1"><strong>{{$book->price}}€</strong></span></p>
                <p class="pt-1">{{$book->description}}</p>
                <hr>
                <p class="mb-0 text-muted text-uppercase small">Rating</p>
                <div>
                    @include('elements.star-rating', ['rating' => round($book->reviews_avg_rating)])
                </div>
                @auth
                    <div class="mt-4">
                        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#reportModal">
                            Report a book
                        </button>
                    </div>
                @endauth
            </div>
        </div>

    </section>
    @auth
        <div class="alert alert-success" role="alert">
            <h3>Want to leave review?</h3>
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#reviewModal">
                Write review
            </button>
        </div>
    @endauth
    @guest
        <div class="alert alert-danger" role="alert">
            <h3>Want to leave review?</h3>
            <a class="btn btn-primary" href="{{url('/login')}}">Login</a>
            <a class="btn btn-dark" href="{{url('/register')}}">Register</a>
        </div>
    @endguest
    <section class="mb-5">

        <div class="row">
            <div class="col">
                @foreach($book->reviews as $review)
                    <div class="card mb-3">
                        <div class="card-header">{{$review->user->name}} @include('elements.star-rating', ['rating' => round($review->rating)])</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    {{$review->review}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div id="app-reviews">
            <reviews-index></reviews-index>
        </div>
    </section>
    @auth
        @include('elements.modal.review')
        @include('elements.modal.report')
    @endauth
@endsection
