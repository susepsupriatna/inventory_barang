@extends('layouts.master')
 
@section('title', 'Tambah Jenis Barang')

@section('content')
<div class="mb-3">
    <a href="{{ route('jenis_barang.index') }}" class="btn btn-light btn-sm loading"><i class="fa-solid fa-angle-left"></i> Kembali</a>
</div>

<form action="{{ route('jenis_barang.store') }}" method="POST">
  @csrf
  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Jenis Barang</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="jenis_barang" value="{{ old('jenis_barang') }}">
      @error('jenis_barang')<small class="text-danger">{{ $message }}</small> @enderror
    </div>
  </div>
  <div class="mb-3 row">
    <div class="col-sm-5 offset-sm-2">
      <button class="btn btn-primary loading">Simpan</button>
    </div>
  </div>
  
</form>
@endsection