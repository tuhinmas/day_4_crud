@extends('layout.main')

@section('content')
<div class="container">
    <div class="col-md-8">
        <form action="/pertanyaan" method="POST">
        @csrf
        <div class="form-group">
            <label for="judul">Judul Pertanyaan:</label>
            <input type="text" name="judul" class="form-control" placeholder="Apa judul pertanyaan Anda?" id="judul">
        </div>
        <div class="form-group">
            <label for="comment">Pertanyaan:</label>
            <textarea name="isi" class="form-control" rows="5" id="comment"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/pertanyaan" class="btn btn-danger ml-2">Back</a>
        </form>
    </div>
</div>
@endsection