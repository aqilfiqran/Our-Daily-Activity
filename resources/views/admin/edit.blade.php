@extends('layouts.admin')

@section('title')
edit article
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header text-center" style="background-color: rgb(39, 88, 138);">
                        <h1 class="box-title" style="color : white"><strong>RIWAYAT ARTIKEL</strong></h2>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="edit" class="table text-center">
                            <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">JUDUL ARTIKEL</th>
                                    <th scope="col"> </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i=1;
                                @endphp
                                @foreach ($article as $articles)
                                <tr class="text-center">
                                <th scope="row">{{$i++}}</th>
                                    <td>{{$articles->singkat_artikel}}</td>
                                    <td><a href="{{route('admin.update',$articles->id)}}"><i class='fas fa-edit' style="color: rgb(39, 88, 138)"></i></a></td>
                                    <td><a href="{{route('admin.destroy',$articles->id)}}"><i class='fas fa-trash' style="color: rgb(39, 88, 138)"></i> </a></td>
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
