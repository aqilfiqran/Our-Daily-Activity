@extends('layouts.app')

@section('title')
article
@endsection

@section('content')
<div class="container">
    <div class="card">
        <div class="col-md-12">
            @foreach ($post as $posts)
                <div class="row">
                    <div class="col-md-6">
                        <img class="card-img-top" src="{{asset($posts->gambar)}}" alt="First slide">
                    </div>
                    <div class="col-md-6">
                        {{$posts->singkat_artikel}}
                        <a href="" class="btn btn-info">Read More</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
