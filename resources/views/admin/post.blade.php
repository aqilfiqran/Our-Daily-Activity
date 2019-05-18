@extends('layouts.admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header text-center bg-info">
                        <h3 class="box-title">POST</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Healthy Diet</th>
                                    <th>Fashion</th>
                                    <th>Work</th>
                                    <th>Banking</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $users)
                                {{-- @php
                                    $diet = Diet::where('member_id',$users->id)->user;
                                @endphp --}}
                                <tr>
                                    <td>{{$users->username}}</td>
                                    <td class="text-center">{{$users->diet->count()}}</td>
                                    <td class="text-center">{{$users->fashion->count()}}</td>
                                    <td class="text-center">{{$users->work->count()}}</td>
                                    <td class="text-center">{{$users->tabungan->count()}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
