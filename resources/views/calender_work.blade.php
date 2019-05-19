@extends('layouts.app')

@section('title')
Work Note
@endsection

@section('content')
<div class="container">
    <div class="row">
        @foreach ($work as $item)
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-info">{{date('M, d Y',$item->jadwal)}}</div>
                <div class="card-body">
                    <pre>{{$item->note_work}}</pre>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
