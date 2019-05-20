@extends('layouts.app')

@section('title')
article
@endsection


@section('content')
<div class="container">
    @php
    $i=0;
    @endphp
    <div class="row example-page">
        @foreach ($article as $articles)
        @if ($i++%2==0)
        @endif
        <div class="col-md-6 text-center">
            <a href="examples/landing.html" target="_blank">
                <img src="{{asset('artikel/'.$articles->gambar)}}" width="100px" height="300px" alt="Rounded Image"
                    class="img-rounded img-responsive" style="width: 100%">
                <a href="{{route('detail',$articles->id)}}" class="btn btn-outline-neutral btn-round"
                    target="_blank">{{$articles->singkat_artikel}}</a>
            </a>
        </div>
        @if ($i%2==0)
    </div>
    @endif
    @endforeach
</div>
@endsection
