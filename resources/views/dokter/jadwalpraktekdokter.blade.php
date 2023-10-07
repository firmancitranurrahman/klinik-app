@extends('layouts.layouts')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1 class="hidden">
            List Data Klinik 
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-hospital"></i> Dokter</a></li>
            <li class="active">Tambah Dokter</li>
          </ol>
    </section><br><br>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="box box-danger">
                <div class="box-header">
                    <h3 class="box-title">Atur Jadwal Dokter</h3>
                    <button class=" btn btn-primary btn-sm pull-right"><i class="fa fa-plus"> Tambah Jadwal Praktek</i></button>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Spesialisasi</label>
                                <select name="spesialisasi" id="">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama Dokter</label>
                                {{-- <input type="text" class="form-control" name=""> --}}
                                <select name="" id="">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-froup">
                                <label for="">Keterangan</label>
                                <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <div class="pull-right">
                        <button class="btn btn-danger">Hapus Jadwal</button>
                        <button class="btn btn-success" >Tambah Jadwal</button>

                    </div>
                </div>

            </div>
        </div>
        
        <div class="col-md-12">
            <div class="box box-danger">
                <div class="box-header">
                    <h3 class="box-title">Atur Jadwal Dokter</h3>
                    <button class=" btn btn-primary btn-sm pull-right"><i class="fa fa-plus"> Tambah Jadwal Praktek</i></button>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Spesialisasi</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $nomer=1 ;?>
                        @foreach($dokter as $user)
                        <tr>
                            <td scope="row">{{ $nomer ; }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->spesialisasi }}</td>
                            <td>{{ $user->alamat }}</td>
                            <td>
                                {{-- <button class="btn btn-success fa fa-search">lihat hari praktek</button> --}}
                                <a href=""  data-toggle="modal" data-target="#modal-default">Tentukan Hari Praktek</a>
                                    <div class="modal fade" id="modal-default">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title">Jadwak Dokter</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <form action="">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="">Nama Dokter :</label><br>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div><br>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="nama">Jam Praktek:</label><br>
                                                                    <select class="form-control" name="" id="">
                                                                        <option value="">00.00-07.30</option>
                                                                        <option value="">07.30-14.30</option>
                                                                        <option value="">14.30-23.30</option>
                                                                    </select>
                                                                </div>
                                                            </div>    
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="nama">Hari Praktek:</label><br>
                                                                    <select class="form-control" name="" id="">
                                                                        <option value="senin">Senin </option>
                                                                        <option value="selasa">Selasa</option>
                                                                        <option value="rabu">Rabu</option>
                                                                        <option value="kamis">Kamis</option>
                                                                        <option value="jum'at">Jum'at</option>
                                                                        <option value="sabtu">Sabtu</option>
                                                                        <option value="minggu">Minggu</option>
                                                                    </select>
                                                                </div>
                                                            </div>   
                                                        </form>
                                                    </div>
                                                </div>
                                            <div class="modal-footer">
                                                {{-- <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button> --}}
                                                <button id="printButton" class="btn btn-medium btn-primary fa fa-print pull-left"></button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                            <!-- /.modal-content -->
                                    </div>
                                            <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
                            </td>
                        </tr>
                        <?php $nomer++?>
                        @endforeach
                            
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default2">
                        Lihat Data Praktek
                    </button>
                    <div class="modal fade" id="modal-default2">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">Jadwak Dokter</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="box-body table-responsive no-padding">
                                            <table id="jadwalTable" class="table table-hover">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Hari</th>
                                                    <th>Nama Dokter</th>
                                                    <th>Jam Praktek</th>
                                                </tr>   
                                                <tr>
                                                    <td>1</td>
                                                    <td rowspan="3">Senin</td>
                                                    <td>dr baba</td>
    
                                                  </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
    
                            </div>
                            <div class="modal-footer">
                              {{-- <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button> --}}
                              <button id="printButton" class="btn btn-medium btn-primary fa fa-print pull-left"></button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                      <!-- /.modal -->
    
    
                </div>
            </div>
        </div>

    </div>
 
</div>

@endsection