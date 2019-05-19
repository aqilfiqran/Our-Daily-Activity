@extends('layouts.app')

@section('title')
Healthy Diet
@endsection

@section('content')
<div class="container">
    <div class="row">
        @foreach ($health as $item)
        <div class="col-md-4">
            <div class="card">
            <div class="card-header bg-info">{{date('M, d y',$item->jadwal)}}</div>
                <div class="card-body">
                    <pre class="card-text">{{$item->eating_plan}}</pre>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
