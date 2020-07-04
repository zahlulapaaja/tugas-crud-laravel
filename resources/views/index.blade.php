@extends('adminlte.master')

@section('content')
<h1 class="text-center pt-2">Selamat Datang di Forum Tanya Jawab</h1>
<div class="text-center">
  <a href="/pertanyaan"><button type="button" class="btn btn-secondary">Daftar Pertanyaan</button></a>
  <a href="pertanyaan/create"><button type="button" class="btn btn-success ml-3">Ajukan Pertanyaan</button></a>
</div>

@endsection