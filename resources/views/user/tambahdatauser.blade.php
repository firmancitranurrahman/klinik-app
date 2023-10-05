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
    </section><br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-11">
                    <div class="box box-danger">
                        <div class="box-header">
                            <h3 class="box-title">Input masks</h3>
                        </div>
                        <div class="box-body">
                        <form id="formAddUser">
                            <div class="col-md-11">
                                {{-- <div class="form-group">
                                    <label for="role">Pilih Role:</label>
                                    <select class="form-control" id="role_id" name="role_id">
                                        <option value="" selected>Pilih Role</option>
                                        <option value="admin">Admin</option>
                                        <option value="pasien">Pasien</option>
                                        <option value="dokter">Dokter</option>
                                    </select>
                                </div> --}}
                                <div class="form-group">
                                    <label for="role_id">Pilih Role:</label>
                                    <select class="form-control" id="role_id" name="role_id">
                                        <option value="" selected>Pilih Role</option>
                                        @foreach ($roles as $role)
                                        <option value="{{ $role->id }}" data-fields="{{ json_encode($role->fields) }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                                  
                            </div>
                            <div id="dynamic-fields">
                                <div class="form-group">
                                    <label>Gaji:</label>
                                    <input type="text" class="form-control" name="Gaji">
                                </div>
                                <div class="form-group">
                                    <label>Departemen:</label>
                                    <input type="text" class="form-control" name="Departemen">
                                </div>
                            </div>
                                                                        {{-- ======== ADMIN ======== --}}
                            <div id="adminFields" class="form-fields">
                                <div class="form-group">
                                    <label for="nama">Nama:</label>
                                    <input type="text" class="form-control"id="nama" name="nama">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama:</label>
                                    <input type="text" class="form-control"id="nama" name="nama">
                                </div>
                            </div>
                                        {{-- ======== END ADMIN ======== --}}

                                         {{-- ======== DOKTER ======== --}}
                            <div id="dokterFields" class="form-fields">
                                <div class="col-md-11">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control"id="nama" name="nama">
                                    </div>
                                </div>
                               <div class="col-md-11">
                                    <div class="form-group">
                                        <label for="nama">Spesialisasi</label>
                                        <input type="text" class="form-control"id="nama" name="nama">
                                    </div>
                               </div>
                               <div class="col-md-11">
                                    <div class="form-group">
                                        <label for="nama">Alamat</label>
                                        <input type="text" class="form-control"id="name" name="name">
                                    </div>
                               </div>
                               <div class="col-md-11">
                                    <div class="form-group">
                                        <label for="nama">No Hp</label>
                                        <input type="text" class="form-control"id="nama" name="nama">
                                    </div>
                               </div>
                                <div class="col-md-11">
                                    <div class="form-group">
                                        <label for="nama">Email</label>
                                        <input type="text" class="form-control"id="nama" name="nama">
                                    </div>
                                </div>
                            </div>
                                         {{-- ======== END ADMIN ======== --}}
                                        {{-- ========  PASIEN ======== --}}
                            <div id="pasienFields" class="form-fields">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nama">Nama Pasien</label>
                                        <input type="text" class="form-control"id="nama" name="nama">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nama">Umur</label>
                                        <input type="text" class="form-control"id="nama" name="nama">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="nama">Golongan Darah</label>
                                        <select  class="form-control"id="nama" name="nama">
                                            <option value="">A</option>
                                            <option value="">AB</option>
                                            <option value="">O</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nama">No Kartu Keluarga</label>
                                        <input type="text" class="form-control"id="nama" name="nama">
                                    </div>
                               </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="nama">Tanggal Lahir</label>
                                        <input type="date" class="form-control"id="nama" name="nama">
                                    </div>
                                </div>
                                
                               <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nama">Pekerjaan</label>
                                        <input type="text" class="form-control"id="nama" name="nama">
                                    </div>
                                </div>
                                
                               <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="nama">Status Pernikahan</label>
                                        <select  class="form-control"id="nama" name="nama">
                                            <option value="">1</option>
                                            <option value="">1</option>
                                            <option value="">1</option>
                                        </select>
                                    </div>
                               </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="nama">Kota</label>
                                        <select  class="form-control"id="nama" name="nama">
                                            <option value="">A</option>
                                            <option value="">AB</option>
                                            <option value="">O</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="nama">Asuransi</label>
                                        <select  class="form-control"id="nama" name="nama">
                                            <option value="">Umum</option>
                                            <option value="">Bpjs</option>
                                            <option value="">O</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-11">
                                    <div class="form-group">
                                        <label for="nama">Email</label>
                                        <input type="text" class="form-control"id="nama" name="nama">
                                    </div>
                                </div>
                            </div>
                                        {{-- ======== END ADMIN ======== --}}
                            <div class="col-md-11">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>
                        </form>

                        </div>
                    </div>
                </div>
              </div>  
          </div>

    </section>

</div>

   
   
@endsection