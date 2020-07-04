@extends('adminlte.master')

@section('content')
<div class="mx-3">
  <h1 class="text-center pt-2 mb-3">Masukkan Jawaban</h1>
  <p><b>Pertanyaan </b>: {{$pertanyaan->isi}}</p>
  <form action="/jawaban/{{$pertanyaan->id}}" method="post">
    @csrf
    <input type="hidden" name="is_selected" value="0">
    <input type="hidden" name="pertanyaan_id" value="{{$pertanyaan->id}}">
    <div class="form-group">
      <label for="judul">Jawaban:</label>
      <input type="text" class="form-control" placeholder="Masukkan jawaban" name="isi" id="jawaban">
    </div>
    <div class="form-group">
      <label for="penjawab">Penjawab:</label>
      <input type="text" class="form-control" placeholder="Masukkan penjawab" name="penjawab" id="penjawab">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</div>
@endsection