@extends('layouts.app')

@section('title')
Fashion
@endsection

@section('content')
<div class="container">
    <div class="row">
        @foreach ($fashion as $item)
        <div class="col-md-3">
            <div class="card">
                <div class="card-header bg-info">{{date('M, d Y',$item->jadwal)}}</div>
                <div class="card-body">
                    <img class="card-img-top pb-4" width="100%" height="100%"
                        src="{{asset('artikel/fashion/'.$item->gambar)}}" alt="Card image cap">
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
