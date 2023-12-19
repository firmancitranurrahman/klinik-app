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
            <li class="active">List Data Pelayanan</li>
          </ol>
    </section><br>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-danger">
                    <div class="box-header">
                        <h3 class="box-title">List Data Pelayanan</h3>
                    </div>
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <th>No</th>
                                <th>Nomer Registrasi</th>
                                <th>tanggal Registrasi</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php $nomer=1 ;?>
                                @foreach ($query as $q)
                                <tr>
                                    <td>{{$nomer }}</td>
                                    <td>{{ $q->no_registrasi }}</td>
                                    <td>{{ $q->tgl_pemeriksaan }}</td>
                                    <td>{{ $q->name }}</td>
                                    <td>{{$q->status }}</td>
                                    <td>
                                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                                            Konfirmasi
                                        </button>
                                        <div class="modal fade" id="modal-default">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></button>
                                                  <h4 class="modal-title">Ubah Status</h4>
                                                </div>
                                                <div class="modal-body">
                                                  <select name="status">
                                                    <option value="Selesai">Selesai</option>
                                                  </select>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                                  <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
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
            </div>
        </div>
    </section>
</div>

@endsection