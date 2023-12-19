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
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <input class="form-control" type="text" name="nik" id="nik" placeholder="masukan nik..">
                                    </div>

                                    <div class="col-md-2">
                                        <button class="btn btn-primary "id="cek-nik">Cek Nik</button>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <form action="{{ route('prosespelayanan') }}" method="post">
                                    @csrf
                                    <div id="result" style="display:none ;">
                                        <div class="col-md-5" hidden>
                                            <div class="form-group">
                                                <input type="text" id="id" name="pasien">
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-5" hidden>
                                            <div class="form-group">
                                                <input type="text" id="id" name="status">
                                            </div>
                                        </div> --}}
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="nama">No Register:</label>
                                                <input class="form-control" type="text" value="{{ $noRegister }}" name="no_registrasi" readonly>
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
                                        

                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="pelayanan">Jenis Pelayanan</label>
                                                    <select class="form-control"name="pelayanan" id="pelayanan">
                                                        @foreach ($pelayanan as $pel)
                                                            <option value="{{ $pel->id }}">{{ $pel->nama_pelayanan }}</option>
                                                        @endforeach
                                                    </select>                                                   
                                            </div>   
                                        </div>
                                        <div class="col-md-5">
                                        <button type="submit">Save</button>
                                        </div>    
                                    </div>
                                </form>
                                
                            </div>
                           

                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="box box-danger">
                    <div class="box-header">
                        <h3 class="box-title">Register Pelayanan</h3>
                    </div>
                    <div class="box-body">
                        <table>
                            <thead>
                                <th>no</th>
                                <th>no</th>
                                <th>no</th>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection