@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col col-lg-6 col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Edit Kategori</h3>
          <div class="card-tools">
            <a href="{{ URL('/admin/katalog') }}" class="btn btn-sm btn-danger">
              Tutup
            </a>
          </div>
        </div>
        <div class="card-body">
          @if(count($errors) > 0)
          @foreach($errors->all() as $error)
              <div class="alert alert-warning">{{ $error }}</div>
          @endforeach
          @endif
          @if ($message = Session::get('error'))
              <div class="alert alert-warning">
                  <p>{{ $message }}</p>
              </div>
          @endif
          @if ($message = Session::get('success'))
              <div class="alert alert-success">
                  <p>{{ $message }}</p>
              </div>
          @endif
          <form action="{{ route('katalog.update', $itemkategori->id) }}" method="POST">
            @method('patch')
            @csrf
          <div class="form-group">
            <div class="form-group">
              <label for="nama_kategori">Nama Kategori</label>
              <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" value="{{ $itemkategori->nama_kategori }}">
            </div>
            <div class="form-group">
              <label for="kode_kategori">Kode Kategori</label>
              <input type="text" name="kode_kategori" id="kode_kategori" class="form-control" value="{{ $itemkategori->kode_kategori }}">
            </div>
            <div class="form-group">
              <label for="jumlah">Jumlah</label>
              <input type="text" name="jumlah" id="jumlah" class="form-control" value="{{ $itemkategori->jumlah }}">
            </div>
            {{-- <div class="form-group">
              <label for="foto">Foto</label>
              <input type="file" name="foto" id="jumlah" class="form-control" value="{{ $itemkategori->jumlah }}"">
            </div> --}}
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Update</button>
              <button type="reset" class="btn btn-warning">Reset</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection