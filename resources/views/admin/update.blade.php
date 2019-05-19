@extends('layouts.admin')

@section('title')
update article
@endsection

@section('content')
<section class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <!-- quick email widget -->
        <div class="box box-info">
            <div class="box-header">
                {{-- <i class="fa fa-envelope"></i> --}}

                <h3 class="box-title">Article</h3>
                <!-- tools box -->
                <!-- /. tools -->
            </div>
            <div class="box-body">
                <form action="{{route('admin.update_admin',$article->id)}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group" >
                    <input type="text" name="singkat_artikel" class="form-control has-feedback{{ $errors->has('singkat_artikel') ? ' has-error' : ''}}" value="{{old('singkat_artikel')}}" id="inputGroupFile02"
                            placeholder="Article" aria-describedby="inputGroupFileAddon02">
                        @if ($errors->has('singkat_artikel'))
                            <span class="help-block">
                                <strong>
                                    {{$errors->first('singkat_artikel')}}
                                </strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="file" name="gambar" class="custom-file-input has-feedback{{ $errors->has('gambar') ? ' has-error' : ''}}" value="{{old('gambar')}}" id="inputGroupFile01"
                        aria-describedby="inputGroupFileAddon01">
                        @if ($errors->has('gambar'))
                            <span class="help-block">
                                <strong>

                                    {{$errors->first('gambar')}}
                                </strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <textarea name="isi_artikel" class="textarea has-feedback{{ $errors->has('isi_artikel') ? ' has-error' : ''}}" value="{{old('isi_artikel')}}"  placeholder="Make Your Article"
                                style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                @if ($errors->has('isi_artikel'))
                                    <span class="help-block">
                                        <strong>
                                            {{$errors->first('isi_artikel')}}
                                        </strong>
                                    </span>
                                @endif
                    </div>
                    <div class="box-footer clearfix">
                        <button type="submit" class="pull-right btn btn-default" id="sendEmail">Submit
                            <i class="fa fa-arrow-circle-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</section>

@endsection
