@extends('layouts.app')

@section('title')
work schedule
@endsection

@section('content')

<div class="container">
    <form>
        <div class="form-group">
            <div class="form-group">
                <div class="form-group">
                    <input type="text" class="form-control datetimepicker" placeholder="Date" />
                </div>
                <div class="form-group">
                    <textarea rows='4' cols='1' type="text-area" class="form-control" id="exampleInputPassword1"
                        placeholder="Note"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
    </form>
</div>
@endsection
