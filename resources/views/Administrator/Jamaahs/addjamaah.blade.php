@extends('Layouts.template') @section('content')

<div class="pagetitle">
    <h1>Tambah Data Jamaah</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Jamaah</li>
        <li class="breadcrumb-item"><a href="{{ route('Jamaah') }}"></a>Data Jamaah</li>
        <li class="breadcrumb-item active">Tambah Data Jamaah</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('insertJamaah') }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="nama_jamaah" class="form-label">Nama Jamaah</label>
            <input type="text" class="form-control" id="nama_jamaah" name="nama_jamaah" required>
          </div>
          <div class="col-12">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" required>
          </div>
          <div class="col-12">
            <label for="jk" class="form-label">Jenis Kelamin</label>
            <input type="text" class="form-control" id="jk" name="jk" required>
          </div>
          <div class="col-12">
            <label for="no_hp" class="form-label">No Handphone</label>
            <input type="number" class="form-control" id="no_hp" name="no_hp" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary float-left" style="width: 20%;">Simpan</button>
            <button type="reset" class="btn btn-secondary float-right" style="width: 20%;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection