@extends('layouts.app')

@section('title')
work schedule
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
            <label for="exampleInputPassword1">warna</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="your schedule">
        </div>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
        </div>

        <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
        </div>


    </div>
    </form>
</div>
</div>
</div>

@endsection
