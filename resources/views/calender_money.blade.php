@extends('layouts.app')

@section('title')
Money Box
@endsection

@section('content')
<div class="container">
    <div class="row">
        @foreach ($money as $item)
        <div class="col-md-3">
            <div class="card">
                <div class="card-header bg-info">{{date('M, d Y',$item->jadwal)}}</div>
                <div class="card-body p-0">
                    <div class="card-header m-0" style="background-color: rgb(255, 251, 0);">
                        Saldo : Rp {{number_format($item->saldo_sekarang,0,',','.')}}
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Pemasukan : Rp {{number_format($item->pemasukan,0,',','.')}}</li>
                        <li class="list-group-item">Pengeluaran : Rp {{number_format($item->pengeluaran,0,',','.')}}</li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
@endsection
