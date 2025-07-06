@extends('layouts.main')

@section('container')
    <!-- =========================
         Main Content
    ========================= -->
    <br>
    <h1>Selamat Datang di Lowongan</h1>
    <p>Platform terbaik untuk menemukan pekerjaan impian Anda.</p>
    <p>Jelajahi berbagai lowongan pekerjaan dan perusahaan terkemuka di Indonesia.</p>
    <!-- End of Main Content -->

    <br>
    <article class="mb-3">
    <h2>
        <a href="/lowongan/{{ $lowongan["slug"] }}"> <!--Slug Browser-->

        {{ $lowongan["judul"] }}
    </h2>
    <p>{{ $lowongan["perusahaan"] }}</p>
    <p>{{ $lowongan["lokasi"] }}</p>
    <p>{{ $lowongan["gaji"] }}</p>
    <p>{{ $lowongan["tanggal"] }}</p>
    <p>{{ $lowongan["deskripsi"] }}</p>
    <p>{{ $lowongan["link"] }}</p>
    </article>
    </br>

@endsection
