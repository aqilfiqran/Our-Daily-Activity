@extends('layouts.app')

@section('title')
money box
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card ">
                <div class="card-header bg-info text-center">{{ __('Money Box') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{route('money.tambah')}}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="saldo"><b>Saldo Sekarang </b></label>
                            <input name="saldo" type="number" class="form-control @error('saldo') is-invalid @enderror"
                                value="{{ old('saldo') }}" autocomplete="saldo" id="saldo" placeholder="Saldo Sekarang">
                            @if ($errors->has('saldo'))
                            <span class="invalid-feedback" role="alert">
                                <strong>
                                    {{$errors->first('saldo')}}
                                </strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="pemasukan"><b>Pemasukan Hari Ini </b></label>
                            <input type="number" name="pemasukan"
                                class="form-control @error('pemasukan') is-invalid @enderror"
                                value="{{ old('pemasukan') }}" autocomplete="pemasukan" id="pemasukan"
                                placeholder="Pemasukan">
                            @if ($errors->has('pemasukan'))
                            <span class="invalid-feedback" role="alert">
                                <strong>
                                    {{$errors->first('pemasukan')}}
                                </strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="pengeluaran"><b>Pengeluaran Hari Ini </b></label>
                            <input type="number" class="form-control @error('pengeluaran') is-invalid @enderror"
                                value="{{ old('pengeluaran') }}" autocomplete="pengeluaran" name="pengeluaran"
                                id="pengeluaran" placeholder="Pengeluaran">
                            @if ($errors->has('pengeluaran'))
                            <span class="invalid-feedback" role="alert">
                                <strong>
                                    {{$errors->first('pengeluaran')}}
                                </strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
