@extends('layouts.app')

@section('title')
healthy schedule
@endsection

@section('content')
<div class="container">
    <form>
        <div class="form-group">
            <div class="form-group">
                <input type="text" class="form-control datetimepicker" placeholder="Date">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Eating Plan">
            </div>
        </div>
    </form>
</div>

@endsection
