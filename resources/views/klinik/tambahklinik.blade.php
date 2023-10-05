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
            <li class="active">Tambah Klinik</li>
          </ol>
    </section>
    <section class="content">
        <div class="row">
            <form action="/storeklinik" method="post">
                @csrf
                <div class="col-md-8">
                    <div class="box box-danger">
                        <div class="box-header">
                            <h3 class="box-title">Input masks</h3>
                        </div>
                        <div class="box-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="nama">No Registrasi Klinik</label>
                                            <input type="text" class="form-control" name="no_registrasi_klinik">
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="nama">Nama Klinik</label>
                                            <input type="text" class="form-control" name="nama_klinik">
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="nama">Alamat Klinik</label>
                                            <input type="text" class="form-control" name="alamat_klinik">
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="nama">Alamat Klinik</label>
                                            <input type="text" class="form-control" name="alamat_klinik">
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="nama">No Telepon Klinik</label>
                                            <input type="text" class="form-control" name="no_telp_klinik">
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <button type="submit">Simpan</button>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
          
        </div>
  
    </section>

</div>

   
   
@endsection