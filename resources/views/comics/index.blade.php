@extends('layouts.app')

@section('title', 'Comics')

@section('content')
<main>
    <section class="container">
        <h1>Comics</h1>
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-12 col-md-4 col-lg-3">
                <div class="card">
                    <img class="dc-img" src="{{$comic->thumb}}" alt="{{$comic->title}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$comic->title}}</h5>
                        <p class="card-title">{!! substr($comic->description, 0, 100) . '...' !!}</p>
                        <a href="#" class="btn btn-success">Info</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </section>
</main>
@endsection
