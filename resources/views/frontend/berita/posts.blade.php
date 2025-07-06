@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    {{-- Cek apakah ada postingan --}}
    @if ($posts->count())
        {{-- Postingan Utama (Hero Card) --}}
        <div class="card mb-3">
            {{-- PERBAIKAN: Membuat gambar dinamis sesuai kategori postingan pertama --}}
            <img src="{{ asset('img/Kategori/' . $posts[0]->category->name . '.jpg') }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
            <div class="card-body text-center">
                <h3 class="card-title"><a href="/berita/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                <p>
                    <small class="text-muted">
                        Ditulis oleh: <a href="/berita/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> |
                        Pada Kategori: <a href="/berita/category/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/berita/{{ $posts[0]->slug }}" class="btn btn-primary">Baca Selengkapnya</a>
            </div>
        </div>

        {{-- Daftar Postingan Lainnya dalam bentuk Grid --}}
        <div>
            <div class="row">
                {{-- Loop dimulai dari postingan kedua (indeks 1) --}}
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)">
                                <a href="/berita/category/{{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a>
                            </div>
                            {{-- PERBAIKAN: Membuat gambar dinamis sesuai kategori setiap postingan --}}
                            <img src="{{ asset('img/Kategori/' . $post->category->name . '.jpg') }}" class="card-img-top" alt="{{ $post->category->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p>
                                    <small class="text-muted">
                                        Ditulis oleh: <a href="/berita/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                                    </small>
                                </p>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/berita/{{ $post->slug }}" class="btn btn-primary">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    @else
        <p class="text-center fs-4">Tidak ada berita yang ditemukan.</p>
    @endif

@endsection