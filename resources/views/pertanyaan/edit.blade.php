@extends('adminlte.master')

@section('content')
<div class="mx-3">
  <h1 class="text-center pt-2 mb-3">Edit Jawaban</h1>
  <form action="/pertanyaan/{{$pertanyaan->id}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="judul">Judul:</label>
      <input type="text" class="form-control" value="{{$pertanyaan->judul}}" placeholder="Masukkan judul pertnyaan" name="judul" id="judul">
    </div>
    <div class="form-group">
      <label for="isi">Pertanyaan:</label>
      <input type="text" class="form-control" value="{{$pertanyaan->isi}}" placeholder="Masukkan pertanyaan anda" name="isi" id="isi">
    </div>
    <div class="form-group">
      <label for="penanya">Penanya:</label>
      <input type="text" class="form-control" value="{{$pertanyaan->penanya}}" placeholder="Masukkan penanya" name="penanya" id="penanya">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</div>
@endsection