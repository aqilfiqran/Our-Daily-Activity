@extends('layouts.app')

@section('title')
healthy schedule
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card ">
                <div class="card-header bg-info text-center">{{ __('Health Diet') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{route('health.tambah')}}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="form-group">
                                <label for="schedule"><b>Schedule </b></label>
                                <input type="date" class="form-control @error('schedule') is-invalid @enderror"
                                    value="{{ old('schedule') }}" autocomplete="schedule" name="schedule" id="schedule">
                                @if ($errors->has('schedule'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>
                                        {{$errors->first('schedule')}}
                                    </strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="eating"><b>Eating Plan </b></label>
                                <textarea type="text-area" name="plan" class="form-control @error('plan') is-invalid @enderror" value="{{ old('plan') }}" autocomplete="plan" id="eating"
                                placeholder="Eating Plan"></textarea>
                                @if ($errors->has('plan'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>
                                        {{$errors->first('plan')}}
                                    </strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Save') }}
                                    </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
