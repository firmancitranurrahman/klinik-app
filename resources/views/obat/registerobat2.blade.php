@extends('layouts.layouts')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1 class="hidden">
          List Data Klinik 
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-hospital"></i> Obat</a></li>
          <li class="active">Tambah Data Obat</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <form action="{{ url('storeobat') }}" method="post">
                @csrf
                <div class="col-md-7">
                    <div class="box box-success">
                        <div class="box-header">
                            <h3 class="box-title">Tambah Data Obat</h3>
                        </div>
                        <div class="box-body">                      
                            <div class="container">
                                <div class="row">

                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="nama">Kode Obat</label>
                                            <input type="text" class="form-control" name="kode_obat">
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="nama">Nama Obat</label>
                                            <input type="text" class="form-control" name="nama_obat">
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="nama">Satuan</label>
                                            <select  class="form-control" name="satuan">
                                                <option value="Botol">Botol</option>
                                                <option value="Tablet">Tablet</option>
                                                <option value="Butir">Butir</option>
                                            </select>
                                        </div>
                                    </div>     
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="nama">Stok</label>
                                            <input type="text" class="form-control" name="stok">
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="nama">Harga Jual</label>
                                            <input type="text" class="form-control" name="harga">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-success"type="submit">simpan</button>
                            </div>                     
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

</div>
@endsection