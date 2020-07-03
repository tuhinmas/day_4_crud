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
        <td><a href="/jawaban/{{$question->id}}" type="button" class="btn btn-primary btn-sm">Jawab!</button></td>
      </tr>
    @endforeach
    </tbody>
  </table>
  <div class="text-center">
    <a href="/pertanyaan/create" class="btn btn-danger btn-lg mt-3">Make Question</a>
  </div>

@endsection