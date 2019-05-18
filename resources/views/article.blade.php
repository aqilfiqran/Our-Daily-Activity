@extends('layouts.app')

@section('title')
article
@endsection


@section('content')
<div class="container">
    @php
    $i=0;
    @endphp
    @foreach ($article as $articles)
        @if ($i++%2==0)
            <div class="row example-page">
        @endif
            <div class="col-md-6 text-center">
                <a href="examples/landing.html" target="_blank">
                    <img src="{{asset('artikel/'.$articles->gambar)}}" alt="Rounded Image" class="img-rounded img-responsive" style="width: 100%">
                <a href="./examples/landing-page.html" class="btn btn-outline-neutral btn-round" target="_blank">{{$articles->singkat_artikel}}</a>
                </a>
            </div>
        @if ($i%2==0)
            </div>
        @endif
    @endforeach
    <div class="col-md-6 text-center">
        <a href="examples/profile.html" target="_blank">
            <img src="img/1.jpg" alt="Rounded Image" class="img-rounded img-responsive" style="width: 100%">
            <a href="./examples/profile-page.html" class="btn btn-outline-neutral btn-round" target="_blank">Profile
                Page</a>
        </a>
    </div>
    <div class="row example-page">
        <div class="col-md-6 text-center">
            <a href="examples/landing.html" target="_blank">
                <img src="img/1.jpg" alt="Rounded Image" class="img-rounded img-responsive" style="width: 100%">
                <a href="./examples/landing-page.html" class="btn btn-outline-neutral btn-round" target="_blank">Landing
                    Page</a>
            </a>
        </div>
        <div class="col-md-6 text-center">
            <a href="examples/profile.html" target="_blank">
                <img src="img/1.jpg" alt="Rounded Image" class="img-rounded img-responsive" style="width: 100%">
                <a href="./examples/profile-page.html" class="btn btn-outline-neutral btn-round" target="_blank">Profile
                    Page</a>
            </a>
        </div>
    </div>

</div>
@endsection
