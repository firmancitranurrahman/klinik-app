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
                    <div class="box-header">
                        <h3 class="box-title">Register Pelayanan</h3>
                    </div>
                    <div class="box-body">
                            <div class="row">
                                <div id="pesan"></div>
                                <div id="error-message" class="callout callout-danger" style="display: none;"></div>
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <input class="form-control" type="text" name="nik" id="nik" placeholder="masukan nik..">
                                    </div>

                                    <div class="col-md-2">
                                        <button class="btn btn-primary "id="cek-nik">Cek Nik</button>
                                    </div>
                                </div>
                            </div>                       
                            <div id="result" style="display:none ;">
                                <h4 class="box-title">1. Data Pasien</h4>
                                <div class="row">
                                    <div class="col-md-12">
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
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nama">No Register:</label>
                                            <input class="form-control" type="text"  value="{{ $noRegister }}" name="no_registrasi" readonly>
                                        </div>
                                    </div>
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
            {{-- <div class="col-md-4">
                <div class="box box-danger">
                    <div class="box-header">
                        <h3 class="box-title">Keluhan Pasien</h3>
                    </div>
                    <div class="box-body">
                        <table id="tabel-pelayanan" style="display:none ;" class="table table-bordered table-hover">
                           <thead>
                            <th>no</th>
                            <th>nama pelayanan</th>
                            <th>action</th>
                           </thead>
                           <tbody>
                            @foreach ($pelayanan as $p)
                                <tr>
                                    <td>{{ $nomor ; }}</td>
                                    <td>{{ $p->nama_pelayanan }}</td>
                                    <td> <input type="checkbox" value="{{ $p->id }}" name="pelayanan[]"></td>
                                </tr>
                            @endforeach 
                          
                           </tbody>
                        </table>
                    </div>
                </div>
            </div> --}}
        
        </div>
    </section>
</div>

@endsection




                           
