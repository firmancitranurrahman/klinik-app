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
                                <input class="form-control input-lg" value="{{ $pemeriksaan->no_rekam_medis }}" type="text" > 
                            </div>
                            <div class="col-md-4">
                                <label for="">Nama Pasien</label>
                                <input class="form-control input-lg" type="text" value="{{ $pemeriksaan->nama_pasien }}" > 
                            </div>
                        </div><br>
                                          
                        <div class="row">
                            <div class="col-md-8">
                                <div class="input-group input-group-lg">
                                    <input type="text" id="obat_selected" class="form-control" data-toggle="modal" data-target="#modal-default">
                                        <span class="input-group-btn">
                                          <button type="button" id="add-obat"class="btn btn-info btn-flat">Tambah Obat</button>
                                        </span>
                                        <div class="modal fade" id="modal-default">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title">List Obat</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <table id="tabel-obat" class="table table-bordered table-hover">
                                                            <thead>
                                                            <tr class="">
                                                              <th>No</th>
                                                              <th>Kode Obat</th>
                                                              <th>Nama Obat</th>
                                                              <th>Stok</th>
                                                              <th>Satuan</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                              <?php $nomer=1; ?>
                                                              @foreach ($obat as $o)
                                                              <tr {{ $o->stok == 0 ? 'inactive-row' : ''  }}>
                                                                <td>{{ $nomer }}</td>
                                                                <td>{{ $o->kode_obat }}</td>
                                                                <td>{{ $o->nama_obat }}</a></td>   
                                                                <td class="stok">{{ $o->stok }}</a></td>    
                                                                <td>{{ $o->satuan }}</a></td>    
                                                              </tr>
                                                                <?php $nomer++?>
                                                              @endforeach
                                                            </tbody>
                                                        </table>
                                                        
                                                    </div>
                                               
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                </div><br>
                            </div>
                         
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <table id="pembelian-obat" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nomer</th>
                                            <th>Kode Obat</th>
                                            <th>Nama Obat(s)</th>
                                            <th>Jumlah</th>
                                            <th>Stok</th>
                                            <th>Harga</th>
                                            <th>Total</th>

                                            <th>Action</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="6" class="h1 text-right">TOTAL:</td>
                                            <td id="grand-total" class="h1">0</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="col-md-12">
                                <button id="beli-obat" class="btn btn-success">Beli Obat</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


</div>
@endsection