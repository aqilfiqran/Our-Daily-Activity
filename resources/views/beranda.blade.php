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
                <div class="carousel-inner pb-3 ">
                    <div class="carousel-item active">
                        <div class="card">
                            <img class="card-img-top" src="{{asset('img/download.jpg')}}" alt="First slide">
                            <div class="card-body text-center bg-info">
                                <a href="" class="card-title" style="color:rgba(14, 3, 49, 0.883);font-size:25px;">
                                    <b>
                                        Work Schedule
                                    </b>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <img class="card-img-top" src="{{asset('img/download.jpg')}}" alt="First slide">
                            <div class="card-body text-center bg-info">
                                <a href="" class="card-title" style="color:rgba(14, 3, 49, 0.883);font-size:25px;">
                                    <b>
                                        Work Schedule
                                    </b>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <img class="card-img-top" src="{{asset('img/download.jpg')}}" alt="First slide">
                            <div class="card-body text-center bg-info">
                                <a href="" class="card-title" style="color:rgba(14, 3, 49, 0.883);font-size:25px;">
                                    <b>
                                        Work Schedule
                                    </b>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <img class="card-img-top" src="{{asset('img/download.jpg')}}" alt="First slide">
                            <div class="card-body text-center bg-info">
                                <a href="" class="card-title" style="color:rgba(14, 3, 49, 0.883);font-size:25px;">
                                    <b>
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
