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
            <div class="col-md-12">
                <div class="box box-danger">
                    <h4 class=" box-header">Register Pelayanan</h4>
                    <div class="box-body">
                        <div class="row">
                            <div class="pesan"></div>
                            <div id="error-message" class="callout callout-danger" style="display: none;"></div>
                            <div class="form-group">
                                <div class="col-md-4">
                                    <input class="form-control" type="text" name="no_rekam_medis" id="no_rekam_medis" placeholder="masukan nomer rekam medis">
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-primary "id="cek-rm">Cek Rekam Medis</button>
                                </div>
                            </div>
                        </div>
                        <div id="result" style="display:none ;">
                            <h4 class="box-title">1. Data Pasien</h4>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label for="">Pilih Dokter</label>
                                        <select  class="form-control"name="dokter" id="dokter">
                                            <option  value="" select>Silahkan Pilih Dokter</option>
                                            @foreach ($dokter as $d)
                                            <option value="{{ $d->id }}">{{ $d->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-5" hidden>
                                    <div class="form-group">
                                        <input type="text" id="id" name="pasien">
                                    </div>
                                </div>   
                                {{-- <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nama">Nomer Rekam Medis:</label>
                                        <input class="form-control" type="text"  value="{{ $noRegister }}" name="no_registrasi" readonly>
                                    </div>
                                </div> --}}
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="nama">Nama:</label>
                                        <input class="form-control" type="text" id="nama" name="nama">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="alamat">Alamat:</label>
                                        <input class="form-control" type="text" id="alamat" name="alamat">
                                    </div>   
                                </div>
                            </div>
                            <h4 class="box-title">2. Keluhan Pasien</h4>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="checkbox">
                                        <label>
                                          <input type="checkbox" keluhan="keluhan[]"value="demam"> Flu
                                        </label>
                                      </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="checkbox">
                                        <label>
                                          <input type="checkbox" name="keluhan[]" value="batuk"> Batuk
                                        </label>
                                      </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="checkbox">
                                        <label>
                                          <input type="checkbox" name="keluhan[]"value="demam"> Demam
                                        </label>
                                      </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="checkbox">
                                        <label>
                                          <input type="checkbox" name="keluhan[]" value="muntah"> Muntah
                                        </label>
                                      </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="checkbox">
                                        <label>
                                          <input value="pusing" name="keluhan[]" type="checkbox"> Pusing
                                        </label>
                                      </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="checkbox">
                                        <label>
                                          <input value="mual" name="keluhan[]" type="checkbox"> Mual
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button id="btn-simpan">Save</button>
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