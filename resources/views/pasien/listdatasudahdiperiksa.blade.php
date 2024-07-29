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
            <li class="active">List Data Belum Di Periksa</li>
          </ol>
    </section><br>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <th>No</th>
                        <th>Nomer Rekam Medis</th>
                        <th>tanggal Registrasi</th>
                        <th>Nama</th>
                        <th>Keluhan</th>
                        <th>Pelayanan</th>
                        <th>Status</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php $nomer=1 ;?>
                        @foreach ($query as $q)
                        <tr>
                            <td>{{$nomer }}</td>
                            <td>{{ $q->id }}</td>
                            <td>{{ $q->no_rekam_medis }}</td>
                            <td>{{ $q->tgl_pemeriksaan }}</td>
                            <td>{{ $q->nama_pasien }}</td>
                            <td>
                                @if ($q->pelayanan==null)
                                    Belum Ada Layanan
                                @else
                                {{ $q->nama_pelayanan }}
                                @endif
                            </td>
                            <td>{{ $q->keluhan }}</td>

                            <td>{{$q->status }}</td>
                            <td>
                                <a href="{{ url('registerobat/' . $q->id) }}" type="button" class="btn btn-success" >edit</a>

                                <button type="button" class="btn btn-default"  data-toggle="modal" data-target="#modal-default{{ $q->id }}">
                                    <i class="fa fa-stethoscope"></i>
                                </button>
                                <div class="modal fade" id="modal-default{{ $q->id }}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">Form Pemeriksaan Pasien</h4>
                                        </div>
                                        <div class="modal-body">
                                            {{-- <form action="/updatepemeriksaan/{{ $q->id }}" method="post"> --}}
                                            <form action="{{ url('/updatepemeriksaan', $q->id) }}" method="post">
                                                @csrf 
                                                @method('PUT')
                                                <h4>1. Biodata Pasien</h4>
                                                <div class="row">
                                                    <div class="form-group">
                                                        <div class="col-md-6">
                                                            <label for="">Nomer Rekam Medis</label>
                                                            <input type="text" disabled value="{{ $q->no_rekam_medis }}" class="form-control">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="">Nama Pasien</label>
                                                            <input type="text" disabled value="{{ $q->nama_pasien }}" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4>2. Kondisi Pasien</h4>
                                                <div class="row">
                                                    <div class="form-group">
                                                        <div class="col-md-3">
                                                            <label for="">Tekanan Darah</label>
                                                            <input type="text" name="tekanan_darah" class="form-control">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="">Tinggi Badan</label>
                                                            <input type="text" name="tinggi_badan"class="form-control">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="">Suhu</label>
                                                            <input type="text" value="{{ $q->suhu }}"name="suhu" class="form-control">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="">Berat Badan</label>
                                                            <input type="text" name="berat_badan" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4>3. Pilih Pelayanan</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <select class="form-control"name="pelayanan" id="">
                                                                @foreach ($pelayanan as $pel)
                                                                <option value="{{ $pel->id }}">{{ $pel->nama_pelayanan }}</option>
                                                                @endforeach
                                                            </select>
                                                            </div>
                                                    </div>  
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
                            </td>
                        </tr>
                        <?php $nomer++?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

@endsection