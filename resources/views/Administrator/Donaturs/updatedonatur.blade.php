@extends('Layouts.template') @section('content')

<div class="pagetitle">
    <h1>Ubah Data Pernikahan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Pernikahan</li>
        <li class="breadcrumb-item"><a href="{{ route('Pernikahan') }}"></a>Pernikahan</li>
        <li class="breadcrumb-item active">Ubah Data Pernikahan</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('updatePernikahan', $data->id) }}" method="POST">
        @csrf
        <div class="col-12">
          <label for="nama_donatur" class="form-label">Nama Ketiduran</label>
          <input type="text" class="form-control" id="nama_donatur" name="nama_donatur" value="{{ $data->nama_donatur }}" required>
        </div>
        <div class="col-12">
          <label for="id_jamaah" class="form-label">Nama Jamaah</label>
          <select id="id_jamaah" class="form-control" name="id_jamaah" required>
              <option value="">-- Select --</option>
              @foreach ($data_jamaah as $row) 
                <option value="{{ $row->id }}" {{ $row->id == $data->id_jamaah ? 'selected' : '' }}>{{ $row->nama_jamaah }}
              @endforeach
          </select>
        </div>
        <div class="col-12">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $data->alamat }}" required>
        </div>
          <div class="col-12">
            <label for="nominal_donasi" class="form-label">Nominal Donasi</label>
            <input type="text" class="form-control" id="nominal_donasi" name="nominal_donasi" value="{{ $data->nominal_donasi }}" required>
          </div>
          <div class="col-12">
            <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
            <input type="text" class="form-control" id="metode_pembayaran" name="metode_pembayaran" value="{{ $data->metode_pembayaran }}" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-success float-left" style="width: 20%;">Update</button>
            <button type="reset" class="btn btn-secondary float-right" style="width: 20%;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection