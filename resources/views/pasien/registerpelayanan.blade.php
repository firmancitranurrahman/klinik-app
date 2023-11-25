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
            <li class="active">Register Pelayanan</li>
          </ol>
    </section><br>
    <section class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="box box-danger">
                    <div class="box-header">
                        <h3 class="box-title">Register Pelayanan</h3>
                    </div>
                    <div class="box-body">
                            <div class="container">
                                <div class="row">
                                    <form id="/ceknikform">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" id="nik"  name="nik" placeholder="Masukkan Nik.." class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn btn-md btn-primary" id="checknikbutton"><i class="fa fa-search"></i></button>
                                        </div>
                                    </form>
    

                                        <div id="result" style="display: none;">
                                            <label for="nama">Nama:</label>
                                            <input type="text" id="nama" name="nama">
                                        
                                            <label for="alamat">Alamat:</label>
                                            <input type="text" id="alamat" name="alamat">
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