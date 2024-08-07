@extends('layouts.layouts')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <h1 class="hidden">
            List Data Klinik 
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-hospital"></i> Pasien</a></li>
            <li class="active">Tambah Pasien</li>
          </ol>
    </section><br>
   
    <section class="content">
        <div class="row">
            @if (session('error'))
                <div id="callout-error" class="callout callout-danger">
                    <h4>{{ session('error') }}</h4>
                </div>
             @endif
        <form method="post" action="{{ url('/storepasien') }}">
            @csrf
          <div class="col-md-8">
              <div class="box box-danger">
                  <div class="box-header">
                      <h3 class="box-title">Tambah Data Pasien</h3>
                  </div>
                  <div class="box-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="nama">No Rekam Medis</label>
                                        <input class="form-control" type="text" value="{{ $no_rekam_medis }}" name="no_rekam_medis" readonly>
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="nama">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tgl_lahir"name="tgl_lahir" onchange="hitungUmur()">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="nama">Umur</label>
                                        <input  id="umur" type="text" class="form-control" name="umur" readonly>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="nama">Golongan Darah</label>
                                        <select  class="form-control" name="golongan_darah">
                                            <option value="A">A</option>
                                            <option value="AB">AB</option>
                                            <option value="O">O</option>
                                            <option value="B">B</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <input type="checkbox" id="ktp"> Mempunyai KTP
                                </div>
                                <div class="ktp">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="nama">Kartu Tanda Penduduk</label>
                                            <input type="text" class="form-control" name="nik" id=nik>
                                        </div>
                                   </div>
                                </div>
                                
                                
                               
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="nama">Pekerjaan</label>
                                        <input type="text" class="form-control" name="pekerjaan">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="nama">Status Pernikahan</label>
                                        <select  class="form-control"id="nama" name="status_pernikahan">
                                            <option value="kawin">Kawin</option>
                                            <option value="belum_kawin">Belum Kawin</option>
                                        </select>
                                    </div>
                                </div>
                               <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="nama">Kota</label>
                                        <select  class="form-control" name="kota">
                                            <option value="">A</option>
                                            <option value="">AB</option>
                                            <option value="">O</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="nama">Asuransi</label>
                                        <select  class="form-control"id="nama" name="asuransi">
                                            <option value="umum">Umum</option>
                                            <option value="bpjs">Bpjs</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="nama">Email</label>
                                        <input type="text" class="form-control"id="nama" name="email">
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
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