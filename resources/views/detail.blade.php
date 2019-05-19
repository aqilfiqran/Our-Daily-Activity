@extends('layouts.app')

@section('title')
detail
@endsection

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header text-center bg-info" style="color :black">
            <h1>{{$article->singkat_artikel}}</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-5">
                    <img src="{{asset('artikel/'.$article->gambar)}}" width="100%" height="500px" alt="">
                </div>
                <div class="col-md-7 pt-2">
                    {{$article->isi_artikel}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
