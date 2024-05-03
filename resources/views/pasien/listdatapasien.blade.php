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
                <li class="active">List Data Klinik</li>
            </ol>
        </section><br>

        <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">List Data Pasien</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>KTP</th>
                    <th>Pekerjaan</th>
                    <th>Status Pernikahan</th>
                    <th>Asuransi</th>
                    <th>Email</th>
                    <th>Pilih</th>

                  </tr>
                  </thead>
                  <tbody>
                    <?php $nomer=1; ?>
                    @foreach ($pasien as $pas)
                    <tr>
                        <td>{{ $nomer ; }}</td>
                        <td>{{ $pas->name }}</td>
                        <td>{{ $pas->no_kk }}</td>
                        <td>{{ $pas->pekerjaan }}</td>
                        <td>{{ $pas->status_pernikahan }}</td>
                        <td>{{ $pas->asuransi }}</td>
                        <td>{{ $pas->email }}</td>
                        {{-- <td> <input type="checkbox" aria-placeholder="cetak"> </td> --}}
                        <td> <input type="checkbox" name="pasien_id[]" value="{{ $pas->id }}" data-pasien-id="{{ $pas->id }}" aria-placeholder="cetak"> </td>

                      </tr>
                      <?php $nomer++?>
                    @endforeach
                  </tbody>
                </table>
                
                <div class="col-md-2">
                    <button  id="btnCetak" disabled class="btn btn-lg btn-success"><i class="fa fa-print"></i></button>

                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                      Launch Default Modal
                    </button>
                    
        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Default Modal</h4>
              </div>
              <div class="modal-body">
                <p>One fine body&hellip;</p>
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
                    {{-- <button id="btnCetak" disabled class="btn btn-lg btn-success" onclick="cetakDokumen()"><i class="fa fa-print"></i></button> --}}
                </div>
                
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </section>  
            
    </div>
@endsection