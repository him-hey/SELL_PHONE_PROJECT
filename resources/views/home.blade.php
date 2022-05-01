@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
                @foreach ($products as $key => $product)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img src="{{ $product->product_img }}" alt="...">
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"> </span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-4 mt-2">
                    <div class="card" style="height: 100%;">
                        <img style="height: 200px;" class="card-img-top" src="{{ $product->product_img }}"
                            alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">{{ $product->product_name }}</h4>
                            <h4 class="card-title">${{ $product->product_price }}</h4>
                            <p>{{ $product->product_des }}</p>
                            <a href="#" class="btn btn-primary">Add To Card</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
