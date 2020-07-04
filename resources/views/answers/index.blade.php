@extends('layout.main')

@section('content')
<div class="container">
    <div class="mt-3">
        <h2 class="p-3 mb-2 bg-secondary text-white text-center">Pertanyaan</h2>
            <div class="d-flex justify-content-between mb-3">
                <div class="p-2">Dibuat <span class="badge badge-info">{{$question -> created_at}}</span></div>
                <div class="p-2">Diupdate <span class="badge badge-info text-right">{{$question -> updated_at}}</span></div>
            </div>
        <h1 class="ml-3 mt-3"><b>{{$question -> judul}}</b></h1>
        <h3 class="ml-3 mt-3">{{$question -> isi}}</h3>
    </div>
    <div class="mt-5">
        <h2 class="p-3 mb-2 bg-secondary text-white text-center mt-3">Jawaban</h2>
        <div class="mt-3">
                @foreach ($jawaban as $key => $answer)
                <div class="card">
                    <div class="card-tiitle ml-3 mt-2">
                        <p>Dibuat <span class="badge badge-primary">{{$answer ->created_at}}</span></p>
                    </div>
                    <div class="card-body">
                        {{$answer -> isi}}
                    </div>
                </div>
                @endforeach
        </div>
        <form method="POST" action="/jawaban/{{$question ->id}}">
        @csrf
            <div class="form-group">
            <textarea name="isi" class="form-control mt-3" id="exampleFormControlTextarea1" rows="5" placeholder="Submit Jawaban Baru"></textarea>
            <button type="submit" class="btn btn-primary btn-lg mt-3">Submit</button>
            <a href="/pertanyaan" class="btn btn-danger btn-lg mt-3">Back</a>
        </div>
        </form>
    </div>
</div>
@endsection