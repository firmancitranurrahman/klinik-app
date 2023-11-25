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
                    <th>CSS grade</th>
                    <th>CSS grade</th>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
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
                        <td><input type="checkbox"></td>
                      </tr>
                      <?php $nomer++?>
                    @endforeach
                  </tbody>
                </table>
                <div class="col-md-2">
                    <div class="form-group">
                        <div class="radio">
                          <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                            cetak tunggal
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                            cetak semua
                          </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-lg btn-success"><i class="fa fa-print"></i></button>
                </div>
                
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </section>  
            
    </div>
@endsection