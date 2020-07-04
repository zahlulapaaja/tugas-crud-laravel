@extends('adminlte.master')

@section('content')
<div class="mx-3">
  <h1 class="text-center pt-2 mb-3">Ajukan Pertanyaan</h1>
  <form action="/pertanyaan" method="post">
    @csrf
    <div class="form-group">
      <label for="judul">Judul:</label>
      <input type="text" class="form-control" placeholder="Masukkan judul pertnyaan" name="judul" id="judul" required>
    </div>
    <div class="form-group">
      <label for="isi">Pertanyaan:</label>
      <input type="text" class="form-control" placeholder="Masukkan pertanyaan anda" name="isi" id="isi" required>
    </div>
    <div class="form-group">
      <label for="penanya">Penanya:</label>
      <input type="text" class="form-control" placeholder="Masukkan penanya" name="penanya" id="penanya" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</div>
@endsection