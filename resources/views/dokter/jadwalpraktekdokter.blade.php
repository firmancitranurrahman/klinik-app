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
        <div class="col-md-12 tambahjadwal">
            <div class="box box-danger">
                <div class="box-header">
                    <h3 class="box-title">Tambah Jadwal Dokter</h3>
                    <button id="reload-halaman" class="btn btn-default pull-right" href="{{ "jadwalpraktekdokter" }}">kembali</button>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="">Spesialisasi</label>
                               
                                <select class="form-control" name="spesialisasi" id="">
                                    <option value=""></option>
                                    @foreach ($spesialisasi as $sp)
                                    <option value="{{ $sp->id }}">{{ $sp->nama_spesialisasi }}</option>

                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="">Nama Dokter</label>
                                {{-- <input type="text" class="form-control" name=""> --}}
                                {{-- <select class="form-control" name="" id="">
                                    <option value=""></option>
                                </select> --}}
                                <select name="nama_dokter" class="form-control" id="nama_dokter">
                                    <!-- Opsi nama dokter akan diisi melalui JavaScript -->
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
                        <button class="btn btn-success" id="tambah-kolom" >Tambah Jadwal</button>
                    </div>
                </div>

            </div>
        </div>

        
        <div class="col-md-12">
            
            <div class="callout callout-warning alert alert-dismissible">
                {{-- <h4>I am a danger callout!</h4> --}}
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Jadwak Belum Dibuat!</h4>

                <p>Anda Belum menambahkan jadwal untuk dokter yang telah dipilih</p>
            </div>
            <div class="box box-danger" id="box-tambah-jadwal">
                <div class="box-header">
                    <h3 class="box-title">Data Jadwal</h3>
                    <button class="btn btn-primary pull-right" id="tambahjadwal"><i class="fa fa-plus"></i> Tampilkan Box Kedua</button>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Hari</th>
                                <th>Jam Masuk</th>
                                <th>Jam Keluar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>   

       
                            {{-- <tr>
                                <td>
                                    1
                                </td>

                                <td>
                                    <div class="form-group">
                                        <select class="form-control" name="hari[]" id="">
                                            <option value="">Senin</option>
                                            <option value="">Selasa</option>
                                            <option value="">Rabu</option>
                                            <option value="">Kamis</option>
                                            <option value="">Jum'at</option>
                                            <option value="">Sabtu</option>
                                            <option value="">Minggu</option>
                                        </select>
                                    </div>
                                </td>
                                <td> 
                                    <div class="form-group">
                                        <input class="form-control" type="time" id="waktu" name="jam_mulai[]">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input class="form-control" type="time" id="waktu" name="jam_selesai[]">
                                    </div>
                                </td>
                                <td>
                                    <button class="btn btn-danger center-block" name="hapusJadwal"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr> --}}
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
 
</div>

@endsection