@extends('templates.header')

@push('style')
<link rel="stylesheet" href="{{ asset('assets') }}/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('assets') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('assets') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('assets') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('assets') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="font-weight-bold">Data User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="">Home</a></li>
              <li class="breadcrumb-item active">Data User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header d-flex">
          <div class="form-inline">
            <input type="search" class="form-control form-control-sidebar" placeholder="Search User">
            <div class="input-group-append ml-2">
              <button class="btn btn-secondary">
                Search
              </button>
            </div>
          </div>
          <div class="form-inline ml-auto">
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#formModal">
            <i class="fas fa-plus-circle"></i> Tambah Data
          </button>
        </div>
        </div>
        <div class="card-body">
          @if (session('success'))
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i> Sukses!</h5>
            {{ session('success') }}.
          </div>
          @endif

          @if ($errors->any())
          <div class="alert alert-danger alert-dismissble">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h5><i class="icon fas fa-ban"></i> Data Gagal Disimpan!</h5>
            <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>                  
              @endforeach
            </ul>
          </div>
              
          @endif
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No.</th>
              <th>ID</th>
              <th>Username</th>
              <th>Password</th>
              <th>Hak Akses</th>
              <th>Role</th>
              <th>User</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer text-center">
            Now You're Premium Member!
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection

@push('script')
<!-- DataTables  & Plugins -->
<script src="{{ asset('assets') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('assets') }}/plugins/jszip/jszip.min.js"></script>
<script src="{{ asset('assets') }}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('assets') }}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('assets') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets') }}/dist/js/adminlte.min.js"></script>
<script src="{{ asset('assets') }}/plugins/sweetalert2/sweetalert2.min.js"></script>

@endpush