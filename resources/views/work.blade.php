@extends('layouts.app')

@section('title')
work schedule
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card ">
                <div class="card-header bg-info text-center">{{ __('Note Work') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{route('work.tambah')}}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="schedule"><b>Schedule </b></label>
                            <input type="date" id="schedule"
                                class="form-control @error('schedule') is-invalid @enderror"
                                value="{{ old('schedule') }}" autocomplete="schedule" name="schedule">
                            @if ($errors->has('schedule'))
                            <span class="invalid-feedback" role="alert">
                                <strong>
                                    {{$errors->first('schedule')}}
                                </strong>
                            </span>
                            @endif

                        </div>
                        <div class="form-group">
                            <label for="note"><b>Note Work </b></label>
                            <textarea type="text-area"
                                class="form-control @error('note') is-invalid @enderror" value="{{ old('note') }}"
                                autocomplete="note" name="note" id="note" placeholder="Note Work"></textarea>
                            @if ($errors->has('note'))
                            <span class="invalid-feedback" role="alert">
                                <strong>
                                    {{$errors->first('note')}}
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
