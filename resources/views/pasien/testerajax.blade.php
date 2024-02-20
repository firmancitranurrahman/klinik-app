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
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">No Register</label>
                                        <input type="text" class="form-control" id="no_registrasi" name="no_registrasi">
                                    </div>
         
                                </div>   
                                <div class="col-md-12">
                                    <button id="btn-simpan">save</button>
                                </div>
                                     
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="box box-danger">
                    <div class="box-header">
                        <h3 class="box-title">Pilihan Pelayanan</h3>
                    </div>
                    <div class="box-body">
                        <table id="tabel-pelayanan" class="table table-bordered table-hover">
                           <thead>
                            <th>no</th>
                            <th>nama pelayanan</th>
                            <th>action</th>
                           </thead>
                           <tbody>
                            <?php $nomor=1; ?>
                            @foreach ($pelayanan as $p)
                                <tr>
                                    <td>{{ $nomor ; }}</td>
                                    <td>{{ $p->nama_pelayanan }}</td>
                                    <td> <input type="checkbox" value="{{ $p->id }}"id='pelayanan' name="pelayanan[]"></td>
                                </tr>
                            <?php $nomor++ ?>
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