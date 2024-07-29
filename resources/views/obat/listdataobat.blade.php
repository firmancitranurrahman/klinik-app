@extends('layouts.layouts')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1 class="hidden">
          List Data Klinik 
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-hospital"></i> Klinik</a></li>
          <li class="active">List Data Klinik</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-8">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">List Data Klinik</h3>
                    </div>
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                <th>No</th>
                                <th>Nama Obat</th>
                                <th>Satuan</th>
                                <th>Stok</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $nomer=1 ;?>
                                @foreach ($obat as $o)
                                <tr>
                                    <td>{{ $nomer ; }}</td>
                                    <td>{{ $o->nama_obat }}</td>
                                    <td>{{ $o->stok }}</td>
                                    <td>{{ $o->satuan }}</td>
                                    <td>
                                        <a href="{{ url('editobat/' . $o->id) }}" type="button" class="btn btn-success" >edit</a>
                                        <a href="" type="button" class="btn btn-danger" >edit</a>
                                    </td>
                                </tr>
                                <?php $nomer++;?>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>
@endsection