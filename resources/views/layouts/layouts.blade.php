<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('public/assets/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('public/assets/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('public/assets/bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('public/assets/dist/css/AdminLTE.min.css') }}">
   <!-- DataTables -->
   <link rel="stylesheet" href="{{ asset('public/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('public/assets/dist/css/skins/_all-skins.min.css') }}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ asset('public/assets/bower_components/morris.js/morris.css') }}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ asset('public/assets/bower_components/jvectormap/jquery-jvectormap.css') }}">
    <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('public/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ asset('public/assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('public/assets/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
  {{-- <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ asset('public/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/assets/extends.css') }}"> --}}

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
    /* Sembunyikan elemen formulir secara default dengan CSS */
    .form-fields {
        display: none;
    }

    .inactive-row {
      background-color: #f8d7da; /* Warna latar belakang merah muda */
      color: #721c24; /* Warna teks merah */
  }
  .inactive-row td {
      cursor: not-allowed; /* Indikator kursor */
  }
</style> 
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      {{-- <span class="logo-mini"><b>A</b>LT</span> --}}

      <span class="logo-mini">      <img src="{{ 'assets' }}/dist/img/arshaka2.png">
      </span>

      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Arshaka</b>Medika</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 1 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  {{ Auth::user()->name }}
                  <small>Member since Nov. 2012</small>
                </p>
              </li>      
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          {{-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> --}}
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
          </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>      
        </li>
        <li class="header">DATA</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-stethoscope"></i> <span>Data Dokter</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('listdatadokter') }}"><i class="fa fa-circle-o"></i> List Data Dokter</a></li>
            {{-- <li><a href="{{ route('listspesialisasi') }}"><i class="fa fa-circle-o"></i>List Data Spesialisasi</a></li> --}}
            <li><a href="{{ route('tambahdatadokter') }}"><i class="fa fa-circle-o"></i>Tambah Data Dokter</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-hospital-o"></i> <span>Data Klinik</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ 'listdataklinik' }}"><i class="fa fa-circle-o"></i> List Data Klinik</a></li>
            <li><a href="{{ 'tambahdataklinik' }}"><i class="fa fa-circle-o"></i> Tambah Data Klinik</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-tablet"></i> <span>Data Obat</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ 'listdataobat' }}"><i class="fa fa-circle-o"></i> List Data Obat</a></li>
            <li><a href="{{ 'tambahobat' }}"><i class="fa fa-circle-o"></i> Tambah Data Obat</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-wheelchair"></i><span>Data Pasien</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ 'listdatapasien' }}"><i class="fa fa-circle-o"></i> List Data Pasien</a></li>
            <li><a href="{{ 'tambahdatapasien' }}"><i class="fa fa-circle-o"></i> Tambah Data Pasien</a></li>
          </ul>
        </li>
        <li class="header">Layanan</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-wheelchair"></i><span>Data Pelayanan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            {{-- <li><a href="{{ 'listdatapelayanan' }}"><i class="fa fa-circle-o"></i> List Data Pelyanan</a></li> --}}
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> List Data Pelayanan
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ 'listdatabelumdiperiksa' }}"><i class="fa fa-circle-o"></i> Belum Di Periksa</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Sudah Di Periksa</a></li>
              </ul>
            </li>

            <li><a href="{{ 'registerpelayanan' }}"><i class="fa fa-circle-o"></i> <span>Register Pelayanan</span></a></li>
          </ul>
        </li>

        <li><a href="{{ 'jadwalpraktekdokter' }}"><i class="fa fa-calendar-times-o"></i><span>Atur Jadwal Praktek</span></a></li>
        <li class="header">Medis</li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Rekam Medis</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  
  @yield('content')

 
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.18
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
  </footer>

  

  {{-- <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" style="display: none;">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar --> --}}

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>



<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- jQuery 3 -->
<script src="{{ asset('public/assets//bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('public/assets/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('public/assets/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('public/assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('public/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="{{ asset('public/assets/bower_components/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('public/assets/bower_components/morris.js/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('public/assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ asset('public/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('public/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('public/assets/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('public/assets/bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('public/assets/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ asset('public/assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('public/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('public/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('public/assets/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('public/assets/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('public/assets/dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('public/assets/dist/js/demo.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>


<script>
  $(function () {
    // Sembunyikan pesan "Tidak ada data" saat halaman dimuat
    $('#no-data-message').hide();

    // Ketika tombol "Tambah Jadwal" ditekan
    $('#tambah-kolom').on('click', function () {
      // Sembunyikan pesan "Tidak ada data"
      $('#no-data-message').hide();
    });
  })
</script>

<script>
     document.getElementById('tambahjadwal').addEventListener('click', function () {
      document.querySelector('.tambahjadwal').style.display = 'block';
      // history.pushState({}, "", "/jadwalpraktekdokter/tambahjadwal");
  });
  document.getElementById('reload-halaman').addEventListener('click', function () {
        // Melakukan reload halaman
        location.reload();
    });
</script>

<script>
  document.getElementById('tambah-kolom').addEventListener('click', function () {
      // Mengambil referensi ke tabel pada "Box Pertama"
      // var tabelBoxPertama = document.getElementById('tabel-box-pertama').getElementsByTagName('tbody')[0];
      
      var tabelBoxPertama = document.getElementById('example1').getElementsByTagName('tbody')[0];

      // Membuat baris baru
      var barisBaru = document.createElement('tr');
      var kolomHari = document.createElement('td');
      var kolomNomer= document.createElement('td');
      var kolomJamMasuk = document.createElement('td');
      var kolomJamSelesai = document.createElement('td');
      var kolomHapusJadwal = document.createElement('td');
      // Menambahkan inputan ke dalam kolom
      // kolomHari.innerHTML = '<input type="text" name="hari[]" class="form-control" />';
      
      
        // Tambahkan input select untuk "Hari"
        // var kolomHari = document.createElement('td');
        
        var selectHari = document.createElement('select');
        selectHari.name = 'hari[]';
        selectHari.className = 'form-control';
        var hariOptions = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];
        for (var i = 0; i < hariOptions.length; i++) {
            var option = document.createElement('option');
            option.value = hariOptions[i];
            option.text = hariOptions[i];
            selectHari.appendChild(option);
        }       

      // kolomNomer.appendChild(rowCount);
      kolomHari.appendChild(selectHari);
      kolomJamMasuk.innerHTML = '<input type="time" name="jam_masuk[]" class="form-control" />';
      kolomJamSelesai.innerHTML = '<input type="time" name="jam_selesai[]" class="form-control" />';
      kolomHapusJadwal.innerHTML = '<button  name="jam_selesai[]" class="btn btn-danger"><i class="fa fa-trash"></i></button>';

      // Menambahkan kolom-kolom ke dalam baris
      barisBaru.appendChild(kolomHari);
      barisBaru.appendChild(kolomJamMasuk);
      barisBaru.appendChild(kolomJamSelesai);
      barisBaru.appendChild(kolomHapusJadwal);

      // Menambahkan baris baru ke dalam tabel
      tabelBoxPertama.appendChild(barisBaru);
  });
</script>

<script>
  // Mendapatkan nilai waktu dari input
  var inputWaktu = document.getElementById("waktu");

  inputWaktu.addEventListener("change", function() {
      var waktuTerpilih = inputWaktu.value;
      console.log("Waktu yang dipilih: " + waktuTerpilih);
  });
</script>


<script>
      $(document).ready(function () {
        $('#spesialisasi').change(function () {
            var spesialisasiId = $(this).val();

            // Kirim permintaan Ajax untuk mendapatkan data dokter
            $.get('/dokter/' + spesialisasiId, function (data) {
                var dokterSelect = $('#nama_dokter');
                dokterSelect.empty(); // Kosongkan opsi nama dokter sebelum menambahkan yang baru

                $.each(data, function (key, value) {
                    dokterSelect.append($('<option>').text(value.nama).attr('value', value.id));
                });
            });
        });
    });
</script>


<script>
  $(function () {
    $('#example1').DataTable()

    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>



<script>
    $(document).ready(function () {
        $('#cek-rm').click(function () {
            var no_rekam_medis = $('#no_rekam_medis').val();
            if (no_rekam_medis.trim() === '') {
              $('#error-message').text('Rekam Medis Tidak Di Isi , Silahkan Di isi')
              .fadeIn(1000) // Menampilkan dengan efek fade selama 1 detik
            }

            $.ajax({
                type: 'POST',
                url: '{{ route("cekrm") }}',
                data: {
                    '_token': '{{ csrf_token() }}',
                    'no_rekam_medis': no_rekam_medis
                },
                success: function (data) {
                    if (data.status) {
                      $('#id').val(data.id).prop('readonly', true);
                      $('#nama').val(data.nama).prop('readonly', true);
                      $('#alamat').val(data.alamat).prop('readonly', true);
                      $('#result').show();
                      $('#tabel-pelayanan').show();
                    } else {
                        // alert('NIK tidak valid harap lakukan pendaftaran pasien!');
                        $('#error-message').text('Nomer Rekam Medis tidak valid, harap lakukan pendaftaran pasien!')
                        .fadeIn(1000) // Menampilkan dengan efek fade selama 1 detik
                        .delay(2000)   // Menahan selama 2 detik
                        .fadeOut(1000)
                        // setTimeout(function(){
                        //     $('#error-message').hide();
                        // }, 3000);
                    }
                },
                error: function (error) {
                    console.log(error);
                    $('#response-message').html('<div class="alert alert-success">Data berhasil disimpan.</div>');

                }
            });
        });
      
    });
</script>

<!-- Pastikan Anda sudah menyertakan jQuery sebelum script ini -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
  $(document).ready(function() {
      $("#btn-simpan").click(function() {
          // Ambil data dari input form
          var no_rekam_medis = $("input[name='no_rekam_medis']").val();
          var nama = $("input[name='nama']").val();
          var alamat = $("input[name='alamat']").val();
          var pasien = $("input[name='pasien']").val();
          var dokter = $('#dokter').val();
          // Ambil data pelayanan yang dipilih
          var keluhan = [];

          $('input[name="keluhan[]"]:checked').each(function() {
                    keluhan.push($(this).val());
                });
        
              // Kirim data menggunakan Ajax
              $.ajax({
                  url: "{{ route('prosespemeriksaan') }}", // Gantilah dengan nama route yang sesuai di Laravel
                  type: "POST",
                 
                  data: {
                      _token: '{{ csrf_token() }}', // Pastikan untuk menyertakan _token dalam setiap permintaan POST di Laravel
                      pasien: pasien,
                      // no_rekam_medis: no_rekam_medis,
                      nama: nama,
                      alamat: alamat,
                      dokter:dokter,
                      keluhan: keluhan
                      // tambahkan data lainnya sesuai kebutuhan
                  },
                  success: function(response) {
                      // Tampilkan pesan sukses kepada pengguna
                      $("#pesan").html('<div class="alert alert-success">'+response.message+'</div>');
                      // window.location.href = 'listdatapasien';
                  },
                  error: function(error) {
                      // Tampilkan pesan error kepada pengguna
                      $("#pesan").html('<div class="alert alert-danger">Terjadi kesalahan, data gagal disimpan!</div>');
                  }
              });
      });

   
  });
</script>


<script>
    function hitungUmur() {
        // Ambil nilai tanggal lahir
        var tanggalLahir = document.getElementById('tgl_lahir').value;

        // Hitung umur berdasarkan tanggal lahir
        var today = new Date();
        var birthDate = new Date(tanggalLahir);
        var age = today.getFullYear() - birthDate.getFullYear();

        // Periksa apakah ulang tahun sudah lewat atau belum
        var monthDiff = today.getMonth() - birthDate.getMonth();
        if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }

        // Tampilkan umur pada input umur
        document.getElementById('umur').value = age;
    }
</script>





<script>
  // Script untuk menyembunyikan callout setelah 2 detik
  document.addEventListener('DOMContentLoaded', function () {
      setTimeout(function () {
          // var callout = document.getElementById('callout');
          var calloutSuccess = document.getElementById('callout-success');
          var calloutError = document.getElementById('callout-error');
          // if (callout) {
          //     callout.style.display = 'none';
          // }
          if (calloutSuccess) {
                    calloutSuccess.style.display = 'none';
                }
          if (calloutError) {
              calloutError.style.display = 'none';
          }
      }, 2000);
  });
</script>

<script>
  function updateGrandTotal() {
    var grandTotal = 0;
    $('#pembelian-obat tbody tr').each(function() {
        var total = parseFloat($(this).find('.total').text());
        grandTotal += total;
    });
    $('#grand-total').text(grandTotal.toFixed(0));
}
      var nomorUrut = 1; // Variabel untuk menyimpan nomor urut baris
  $(document).ready(function() {
    var ambilNamaObatUrl = "{{ route('ambilNamaObat', ':nama_obat') }}";
      // Mengatur tindakan ketika baris tabel obat di-klik
      $('#tabel-obat tbody').on('click', 'tr', function() {
          // Mendapatkan nama obat dari kolom kedua (indeks 1) di baris yang di-klik
          // Cek apakah baris memiliki stok 0 (misalnya, dengan kelas 'inactive-row')
          if ($(this).hasClass('inactive-row')) {
              return; // Abaikan klik jika baris tidak aktif
          }
          var nama_obat = $(this).find('td:eq(2)').text(); // Ganti indeks sesuai dengan kolom nama obat

          // Menetapkan nilai nama obat ke input obat_selected
          $('#obat_selected').val(nama_obat);
          
      });

      // Contoh logika untuk menambahkan kelas 'inactive-row' berdasarkan stok
    $('#tabel-obat tbody tr').each(function() {
        var stok = parseInt($(this).find('td.stok').text(), 10); // Asumsi stok ada di kolom dengan kelas 'stok'
        if (stok === 0) {
            $(this).addClass('inactive-row');
        }
    });

   

   
    $('#add-obat').on('click', function() {
            // Mendapatkan nama obat dari input obat_selected
            var nama_obat = $('#obat_selected').val();
            var jumlah= 1;
            
            if (nama_obat !== "") {
              var url = ambilNamaObatUrl.replace(':nama_obat', nama_obat);

              var buttonAction = '<button class="btn btn-success fa fa-plus tambah-jumlah">Tambah</button> <button class="btn btn-danger fa fa-minus kurang-jumlah">Kurang</button>';
              // AJAX request untuk mengambil data obat
                $.ajax({
                    // url: '/ambilNamaObat/' + nama_obat,
                    url: url,
                    type: 'GET',
                    success: function(data) {
                        if (data) {
                            var stok = data.stok;
                            var harga_jual= parseFloat(data.harga_jual);
                            var total= harga_jual*jumlah; 
                            // Menambahkan baris baru ke tabel obat terpilih
                            var newRow = '<tr><td>' + nomorUrut + '</td><td>' + data.kode_obat + '</td><td>' + nama_obat + '</td><td class="jumlah-obat">'+jumlah+'</td><td class="stok">' + data.stok + '</td><td class="harga_jual">' + harga_jual.toFixed(0) + '</td><td class="total">'+ total.toFixed(0) +'</td><td>'+buttonAction+'</td></tr>';
                            var $newRow = $(newRow);
                            var $newRow = $(newRow);
                          if (stok <= 0) {
                              $newRow.find('.tambah-jumlah').prop('disabled', true); // Nonaktifkan tombol tambah jika stok 0
                              $newRow.css('background-color', '#ffcccc'); // Tanda visual
                          }

                            $('#pembelian-obat tbody').append(newRow);
                            nomorUrut++; // Menambahkan nomor urut
                            // Mengosongkan input obat_selected setelah ditambahkan
                            $('#obat_selected').val('');
                            $('#beli-obat').prop('disabled', false);
                            updateGrandTotal(); // Perbarui total keseluruhan setelah menambahkan baris
                        } else {
                            alert("Data obat tidak ditemukan!");
                        }
                    },
                    error: function() {
                        alert("Terjadi kesalahan dalam mengambil data obat.");
                    }
                });
            } else {
                alert("Silakan pilih obat terlebih dahulu!");
            }
        });

         // Event listener untuk tombol "Tambah"
        $('#pembelian-obat').on('click', '.tambah-jumlah', function() {
          
            var row = $(this).closest('tr');
            
            // var jumlahTd = $(this).closest('tr').find('.jumlah-obat');
            // var currentJumlah = parseInt(jumlahTd.text(), 10);
            var jumlahTd = row.find('.jumlah-obat');
            var stokTd = row.find('.stok');
            var currentJumlah = parseInt(jumlahTd.text(), 10);
            var stok = parseInt(stokTd.text(), 10);
            
            var hargaTd= row.find('.harga_jual');
            var totalTd= row.find('.total');
            var harga = parseFloat(hargaTd.text());

            if(currentJumlah<stok){
              jumlahTd.text(currentJumlah + 1);
              var newTotal = harga * (currentJumlah + 1);
              totalTd.text(newTotal.toFixed(0));
              updateGrandTotal();

            }else{
              alert('Jumlah obat tidak boleh melebihi stok yang tersedia.');
            }

        });

        // Event listener untuk tombol "Kurang"
        $('#pembelian-obat').on('click', '.kurang-jumlah', function() {
            var row = $(this).closest('tr');
            var jumlahTd = row.find('.jumlah-obat');
            var hargaTd = row.find('.harga_jual');
            var totalTd = row.find('.total');
            var currentJumlah = parseInt(jumlahTd.text(), 10);
            var harga = parseFloat(hargaTd.text());
            if (currentJumlah > 1) {
                jumlahTd.text(currentJumlah - 1);
                var newTotal = harga * (currentJumlah - 1);
                totalTd.text(newTotal.toFixed(0));
                updateGrandTotal();

            }

            
        });

        $('#beli-obat').on('click', function() {     
          var updateStokUrl = "{{ route('updateStok') }}";             
          var obatData = [];
              $('#pembelian-obat tbody tr').each(function() {
                  var row = $(this);
                  var kode_obat = row.find('td').eq(1).text();
                  var jumlah = parseInt(row.find('.jumlah-obat').text(), 10);
                  obatData.push({ kode_obat: kode_obat, jumlah: jumlah });
              });
              $.ajax({
                url: updateStokUrl, // URL endpoint untuk memperbarui stok
                type: 'POST',
                data: JSON.stringify({ pembelian: obatData }),
                contentType: 'application/json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.success) {
                        alert('Pembelian obat berhasil!');
                        // Reset tabel atau melakukan aksi lain setelah pembelian berhasil
                        $('#pembelian-obat tbody').empty();
                        $('#grand-total').text('0');
                        $('#beli-obat').prop('disabled', true);
                        window.location.reload(); // Refresh halaman
                    } else {
                        alert('Terjadi kesalahan dalam pembelian obat: ' + response.message);
                    }
                },
                error: function() {
                    alert('Terjadi kesalahan dalam memperbarui stok obat.');
                }
              });
         
        });

  });
</script>


</body>
</html>
