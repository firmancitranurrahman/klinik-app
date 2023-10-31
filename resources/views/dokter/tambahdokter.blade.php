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
    </section><br>
    <section class="content">
        <div class="row">
        <form method="post" action="/storedokter">
            @csrf
          <div class="col-md-8">
              <div class="box box-danger">
                  <div class="box-header">
                      <h3 class="box-title">Tambah Data Dokter</h3>
                  </div>
                  <div class="box-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="nama">Spesialisasi</label>
                                        <select class="form-control" name="spesialisasi" id="">
                                           <option value="">Pilih Spesialisasi</option>
                                            @foreach ($spesialisasi as $sp)
                                                <option value="{{ $sp->id }}">{{ $sp->nama_spesialisasi }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="nama">Alamat</label>
                                        <textarea type="textarea" class="form-control"id="nama" name="alamat" ></textarea>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="nama">No Hp</label>
                                        <input type="text" class="form-control" name="no_hp">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="nama">Email</label>
                                        <input type="text" class="form-control" name="email">
                                    </div>
                                </div>        
                                            
                            </div>
                            <button class="btn btn-success"type="submit">simpan</button>
                        </div>                     
                  </div>
              </div>
          </div>
          <div class="col-md-4">
            <div class="box box-danger">
                <div class="box-header">
                    <h3 class="box-title">Tambah Foto Profil</h3>
                </div>
            </div>
          </div>
        </form>  
        </div>
  
    </section>

</div>

   
   
@endsection