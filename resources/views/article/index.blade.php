@extends('layouts.app')

@section('content')

<h1>Halaman artiel nih </h1>
<!-- <a href='/artikel/create' class="btn btn-primary">Tambah Artikel</a> -->
@foreach($articles as $article)
    <div class="card mb-5">
        <h1>ini titlenya {{ $article->title }}</h1>
        <p>ini subjectnya {{ $article->subject }}</p>
        <a href='artikel/{{$article->id}}/edit' class="btn btn-primary">Edit</a>
    </div>
@endforeach

<div>
    {{ $articles->links() }}
</div>
@endsection
