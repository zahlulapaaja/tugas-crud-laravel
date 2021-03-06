@extends('adminlte.master')

@section('content')
<div class="mx-3">
  <h1 class="text-center pt-2 mb-3">Daftar Jawaban</h1>
  <p><b>Pertanyaan :</b> {{ $pertanyaan->isi }}</p>

  <table class="table table-bordered">
    <thead>
      <tr class="text-center">
        <th>No</th>
        <th>Terverifikasi</th>
        <th>Jawaban</th>
        <th>Penjawab</th>
        <th>Waktu Dibuat</th>
        <th>Waktu Diperbarui</th>
      </tr>
    </thead>
    <tbody>
      <?php $i=1 ?>
      @foreach($jawaban as $key => $data)
      <tr class="text-center">
        <td>{{ $i++ }}</td>
        @if ($data->is_selected === 0)
          <td>&#8722;</td>
        @else
          <td>&#10004;</td>
        @endif
        <td class="text-left">{{ $data->isi }}</td>
        <td>{{ $data->penjawab }}</td>
        <td>{{ $data->created_at }}</td>
        <td>{{ $data->updated_at }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

  @if (count($jawaban) === 0)
    <p class="text-center">Belum ada jawaban!</p>
  @endif

  <div class="d-flex mx-2">
    <div class="p-2"><a href="/pertanyaan" class="btn btn-danger" role="button">Kembali</a></div>
    <div class="ml-auto p-2"><a href="/jawaban/create/{{$pertanyaan->id}}" class="btn btn-success" role="button">Bantu jawab</a></div>
  </div>
</div>
@endsection