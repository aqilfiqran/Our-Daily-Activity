@extends('layouts.app')

@section('title')
List Note
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header card-header-info">25 Aug 2019</div>
                <div class="card-body">
                    @foreach ($fashion as $item)
                    <div class="card-title pb-2">Fashion</div>
                    <img class="card-img-top pb-4" src="{{asset('artikel/fashion/'.$item->gambar)}}"
                        alt="Card image cap">
                    @endforeach
                    <div class="card-title">Note Work</div>
                    <p><small>projek pbw</small></p>
                    <p><small>projek pbw</small></p>
                    <p><small>projek pbw</small></p>
                    <div class="card-title">Money Box</div>
                    <div class="card card-nav-tabs" style="width: 10rem;">
                        <div class="card-header card-header-danger">
                            Saldo : Rp.
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Debit : Rp. </li>
                            <li class="list-group-item">Credit : Rp. </li>
                        </ul>
                    </div>
                    <div class="card-title">Healthy Diet</div>

                    <div class="card" style="width: 10rem;">
                        <div class="card-body">
                            <p class="card-text">You Have to Eat : </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-nav-tabs">
                <div class="card-header card-header-info">25 Aug 2019 <small>12.02 PM</small></div>
                <div class="card-body">
                    <div class="card-title">Your Schedule</div>
                    <p><input type="checkbox" value="">
                        <small>projek pbw</small></p>
                    <p><input type="checkbox" value="">
                        <small>projek pbw</small></p>
                    <p><input type="checkbox" value="">
                        <small>projek pbw</small></p>
                    <br>
                    <br>
                    <div class="card-title">Fashion Schedule</div>
                    <div class="card" style="width: 10rem;">
                        <img class="card-img-top" src=".." alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">This is Your Fashion For Monday</p>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="card-title">Money Box</div>
                    <div class="card card-nav-tabs" style="width: 10rem;">
                        <div class="card-header card-header-danger">
                            Saldo : Rp.
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Debit : Rp. </li>
                            <li class="list-group-item">Credit : Rp. </li>
                        </ul>
                    </div>
                    <br>
                    <br>
                    <div class="card-title">Healthy Diet</div>
                    <div class="card" style="width: 10rem;">
                        <div class="card-body">
                            <p class="card-text">You Have to Eat : </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
