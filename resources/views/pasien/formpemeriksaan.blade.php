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
            <li class="active">Data Pemeriksaan</li>
          </ol>
    </section><br>
    <section class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="box box-danger">
                    <div class="box-header">
                        <h3 class="box-title">Pemeriksaan Pasien</h3>
                    </div>
                    <div class="box-body">
                        <div class="container">
                            <div class="row">
                                <form action="{{ route('updatepemeriksaan', $query->id) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="from-group">
                                        <div class="col-md-4">
                                            <label for="">No Register</label>
                                            <input type="text" value="{{ $query->no_registrasi }}" class="form-control">
                                        </div>
                                    </div>

                                </form>
                            

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>

@endsection