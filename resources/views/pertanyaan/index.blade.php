@extends('adminlte.master')

@section('content')
<div class="mx-3">
  <h1 class="text-center pt-2 mb-3">Daftar Pertanyaan</h1>
  <table class="table table-bordered">
    <thead>
      <tr class="text-center">
        <th>No</th>
        <th>Judul</th>
        <th>Pertanyaan</th>
        <th>Penanya</th>
        <th>Jawaban</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($pertanyaan as $key => $data)
      <tr class="text-center">
        <td>{{ $key + 1 }}</td>
        <td>{{ $data->judul }}</td>
        <td class="text-left">{{ $data->isi }}</td>
        <td>{{ $data->penanya }}</td>
        <td><a href="jawaban/{{$data->id}}" class="btn btn-info">Jawaban</a></td>
        <td>
          <a href="pertanyaan/{{$data->id}}" class="btn btn-info">Detail</a>
          <form action="/pertanyaan/{{$data->id}}" method="post" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Hapus</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  @if (count($pertanyaan) === 0)
    <p class="text-center">Belum ada pertanyaan!</p>
  @endif

  <div>
    <a href="pertanyaan/create"><button type="button" class="btn btn-success ml-3">Ajukan Pertanyaan</button></a>
  </div>
</div>
@endsection