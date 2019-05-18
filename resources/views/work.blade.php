@extends('layouts.app')

@section('title')
work schedule
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-7">
            <form>
                <div class="form-group">
                    <div class="form-group">
                        <label>Date and Time:</label>
                        <input type="text" class="form-control datetimepicker" placeholder="27/03/2019" />

                        <div class="form-group">
                            <label for="exampleInputPassword1">Note</label>
                            <textarea rows='4' cols='1' type="text-area" class="form-control" id="exampleInputPassword1"
                                placeholder="your schedule"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
