@extends('layouts.app')

@section('title')
money box
@endsection

@section('content')

<div class="container">
    <div class="col-md-12">
        <div class="row">

            <div class="col-md-6">
    <form>
        <div class="form-group">
             <label>Date and Time:</label>
            <input type="text" class="form-control datetimepicker" placeholder="27/03/2019" />
        <div class="form-group">
            <label for="exampleInputPassword1">saldo</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">credit</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">debit</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
        </div>
    </form>
</div>
</div>
</div>
</div>

@endsection
