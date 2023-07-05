{{-- @dd($post) --}}
@extends('layouts.main')

@section('container')
    <article>
        <h2> {{ $post->judul }} </h2>
        <h3> {!! $post->body !!} </h3>
    </article>

    <br>
    <a href="/blog">Kembali ke halaman Blog</a>
@endsection
