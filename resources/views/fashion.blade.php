@extends('layouts.app')

@section('title')
work schedule
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header bg-info text-center">{{ __('FASHION') }}</div>
                <div class="card-body">
                    <form action="{{route('fashion.tambah')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="schedule"><b>Schedule </b></label>
                            <input type="date" name="schedule"  class="form-control @error('schedule') is-invalid @enderror" value="{{ old('schedule') }}" autocomplete="schedule" id="schedule">
                            @if ($errors->has('schedule'))
                                <span class="invalid-feedback" role="alert">
                                <strong>
                                    {{$errors->first('schedule')}}
                                </strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for=""><b>Image </b></label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="image" type="file" class="custom-file-input @error('image') is-invalid @enderror" value="{{ old('image') }}" autocomplete="image" id="inputGroupFile01"
                                    aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Upload Your Fashion</label>
                                </div>
                            </div>
                            @if ($errors->has('image'))
                                <span class="invalid-feedback" role="alert">
                                <strong>
                                    {{$errors->first('image')}}
                                </strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
