@extends('layouts.main')

@section('container')
    @foreach ($ulasanProduk as $ulasan)
        <article>
            <h2>
                <a href="/blog/{{ $ulasan->slug }}"> {{ $ulasan->judul }} </a>
            </h2>
            <h4> {{ $ulasan->excerpt }} </h4>
            <hr>
        </article>
    @endforeach
@endsection
