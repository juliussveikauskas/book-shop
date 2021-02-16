@extends('layouts.app')
@section('content')
    <!--Section: Block Content-->
    <section class="mb-5">

        <div class="row">
            <div class="col-md-6 mb-4 mb-md-0">
                <div>
                    <div class="row mx-1">
                        <div class="col-12 mb-0">
                            <img src="{{asset('storage/'.$book->image)}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h1>{{$book->name}}</h1>
                <p><span class="mr-1"><strong>{{$book->price}}€</strong></span></p>
                <p class="pt-1">{!!$book->description!!}</p>
                <hr> 
                <p class="mb-0 text-muted text-uppercase small">Rating</p>
                <div class="stars">
                    <form action="">
                        <input class="star star-5" id="star-5" type="radio" name="star"/> <label class="star star-5" for="star-5"></label>
                        <input class="star star-4" id="star-4" type="radio" name="star"/> <label class="star star-4" for="star-4"></label>
                        <input class="star star-3" id="star-3" type="radio" name="star"/> <label class="star star-3" for="star-3"></label>
                        <input class="star star-2" id="star-2" type="radio" name="star"/> <label class="star star-2" for="star-2"></label>
                        <input class="star star-1" id="star-1" type="radio" name="star"/> <label class="star star-1" for="star-1"></label>
                    </form>
                </div>
            </div>
        </div>

    </section>
    <!--Section: Block Content-->
@endsection
