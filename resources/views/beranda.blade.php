@extends('layouts.app')

@section('title')
Home
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner pb-3">
                    <div class="carousel-item active">
                        <div class="card gradient" style="background-color: rgba(128, 86, 169,0.8);">
                            <img class="card-img-top" src="{{asset('img/img1.jpg')}}" alt="First slide">
                            <div class="card-body text-center ">
                                <a href="{{url('money')}}" class="card-title" style="color:white;font-size:30px;">
                                    <b style>
                                        Money Box
                                    </b>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card gradient" style="background-color: rgba(128, 86, 169,0.8);">
                            <img class="card-img-top" src="{{asset('img/img13.jpeg')}}" alt="First slide">
                            <div class="card-body text-center ">
                            <a href="{{url('healthy')}}" class="card-title" style="color:white;font-size:30px;">
                                    <b style>
                                        Health Diet
                                    </b>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card gradient" style="background-color: rgba(128, 86, 169,0.8);">
                            <img class="card-img-top" src="{{asset('img/img9.jpeg')}}" alt="First slide">
                            <div class="card-body text-center ">
                                <a href="{{url('fashion')}}" class="card-title" style="color:white;font-size:30px;">
                                    <b style>
                                        Fashion Planning
                                    </b>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card gradient" style="background-color: rgba(128, 86, 169,0.8);">
                            <img class="card-img-top" src="{{asset('img/img12.jpeg')}}" alt="First slide">
                            <div class="card-body text-center ">
                                <a href="{{url('work')}}" class="card-title" style="color:white;font-size:30px;">
                                    <b style>
                                        Work Schedule
                                    </b>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
