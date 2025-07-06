@extends('layouts.main')

@section('container')
    <div class="container">
        @if(isset($post))
            <h1 class="mb-5">{{ $post->title }}</h1>

            <p>
                Ditulis oleh <a href="/berita/authors/{{ $post->author->username }}">{{ $post->author->name}}</a>
                pada: {{$post->created_at->format('d M Y') }} <br> |
                Kategori: <a href="/berita/category/{{ $post->category->slug ?? 'empty' }}">{{$post->category->name ?? 'empty' }}</a>
            </p>

            {{-- Menampilkan gambar artikel --}}
            {{-- Jika post memiliki gambar, tampilkan gambar tersebut --}}
            {{-- Jika tidak, tampilkan gambar default --}}

            <img src="{{ $post->image }}" alt="{{ $post->title }}" class="center">

            <style>
                .center {
                    display: block;
                    margin-left: auto;
                    margin-right: auto;
                    max-width: 100%;
                    height: auto;
                }
            </style>

            <article class="my-3 fs-5">
                {{-- Tanda {!! !!} digunakan agar tag HTML di dalam body bisa dirender --}}
                {!! $post->body !!}
            </article>

            <a href="/berita" class="btn btn-primary mt-4">&laquo; Kembali ke Kumpulan Berita</a>
        @else
            <h2>Artikel tidak ditemukan.</h2>
            <a href="/berita" class="btn btn-primary mt-4">&laquo; Kembali ke Kumpulan Berita</a>
        @endif
    </div>
@endsection