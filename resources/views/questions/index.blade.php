@extends('layout.main')

@section('content')
<table class="table table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Pertanyaan</th>
        <th>Dibuat</th>
        <th>Diupdate</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    @foreach ($questions as $key =>$question  )
      <tr>
        <td>{{$key+1}}</td>
        <td>{{$question -> judul}}</td>
        <td>{{$question -> isi}}</td>
        <td>{{$question -> created_at }}</td>
        <td>{{$question -> updated_at}}</td>
        <td><button type="button" class="btn btn-primary btn-sm" onClick ="window.location.href='/jawaban'">Jawab!</button></td>
      </tr>
    @endforeach
    </tbody>
  </table>

@endsection