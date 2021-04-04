@extends('layouts.app')

@section('content')

<h1>Halaman artiel nih </h1>
<!-- <a href='/artikel/create' class="btn btn-primary">Tambah Artikel</a> -->
@foreach($articles->chunk(3) as $articleChunk )
    <div class='row'>
        @foreach($articleChunk as $article)
            <div class=" col card mb-1 ml-2 mr-2">
                <div class="card-body">
                    <h1>{{ ucfirst($article->title) }}</h1>
                    <p>ini subjectnya {{ $article->subject }}</p>
                    <div class="col">
                        <a href='/artikel/{{ $article->title }}' class="btn btn-info btn-sm stretched-link">Baca</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endforeach

<div>
    {{ $articles->links() }}
</div>
@endsection
