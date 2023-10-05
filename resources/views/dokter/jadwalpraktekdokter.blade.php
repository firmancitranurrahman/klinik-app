@extends('layouts.layouts')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1 class="hidden">
            List Data Klinik 
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-hospital"></i> Dokter</a></li>
            <li class="active">Tambah Dokter</li>
          </ol>
    </section>
    <div class="col-md-8">
        <div class="box box-danger">
            <div class="box-header">
                <h3 class="box-title">Atur Jadwal Dokter</h3>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $nomer=1 ;?>
                    @foreach($dokter as $user)
                    <tr>
                        <td scope="row">{{ $nomer ; }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->alamat }}</td>
                        <td>
                            <button class="btn btn-success fa fa-search"></button>
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

@endsection