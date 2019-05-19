@extends('layouts.app')

@section('title')
money box
@endsection

@section('content')

<div class="container">
    <!-- <div class="col-md-12"> -->

    <form>
        <div class="form-group">
            <div class="form-group">
                <input type="text" class="form-control datetimepicker" placeholder="Date">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Saldo">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Credit">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Debit">
            </div>
    </form>
    <!-- </div> -->
</div>

@endsection
