@extends('layouts.app')

@section('content')
<h1>{{ $article->title }}</h1>
<p>
    {{ $article->subject }}
</p>
<a href='/artikel/{{ $article->id }}/edit' class="btn btn-info btn-sm">Edit</a>

<form action="artikel/{{ $article->id }}" method="post">
    @csrf
    @method('DELETE')
    <button class="btn btn-sm btn-danger">Hapus</button>
</form>
<a href='/artikel' class="btn btn-info btn-sm">back</a>
@endsection
