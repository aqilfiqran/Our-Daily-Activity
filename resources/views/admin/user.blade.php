@extends('layouts.admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header text-center" style="background-color: rgb(39, 88, 138);">
                        <h2 class="box-title" style="color : white"><strong>POST</strong></h2>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table text-center">
                            <thead>
                                <tr>
                                    <th>USERNAME</th>
                                    <th>MANAGE</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $users)
                                <tr class="text-center">
                                    <td>{{$users->username}}</td>
                                    <td><a href="{{route('admin.delete',$users->id)}}"><i class="fas fa-trash" style="color: rgb(39, 88, 138)"></i></a></td>
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
