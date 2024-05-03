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
                        <h3 class="box-title">Register Obat</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">No Rekam Medis</label>
                                <input class="form-control input-lg" type="text" > 
                            </div>
                            <div class="col-md-4">
                                <label for="">Nama Pasien</label>
                                <input class="form-control input-lg" type="text" > 
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="input-group input-group-lg">
                                    <input type="text" class="form-control" data-toggle="modal" data-target="#modal-default">
                                        <span class="input-group-btn">
                                          <button type="button" class="btn btn-info btn-flat">Tambah Obat</button>
                                        </span>
                                        <div class="modal fade" id="modal-default">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title">Form Pemeriksaan Pasien</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                    
                                                        
                                                    </div>
                                               
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>
@endsection