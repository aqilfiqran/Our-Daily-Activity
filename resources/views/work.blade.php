@extends('layouts.app')

@section('title')
work schedule
@endsection

@section('content')


<div class="container">
    <div>
        <h4>ADD YOUR SCHEDULE</h4>
    </div>
    <div class="col-md-12">
        <div class="row">

            <div class="col-md-6">
                <form>
                    <div class="form-group">
                        <label>Date and Time:</label>
                        <input type="text" class="form-control datetimepicker" placeholder="27/03/2019" />
                        <div class="form-group">
                            <label for="exampleInputPassword1">Note</label>
                            <input type="text" class="form-control" id="exampleInputPassword1"
                                placeholder="your schedule">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-body no-padding">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
