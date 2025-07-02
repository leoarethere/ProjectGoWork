@extends('layouts.main')

@section('container')
    <!-- Main Content -->
    <br>
    <article>
        <div class="post mb-5 mt-1">
        <h1>
            {{ $post["title"] }}
        </h1>
        <p><strong>{{ $post["author"] }}</strong></p>
        <p>{{ $post["body"] }}</p>
        <p><em>Published on: {{ $post["created_at"] }}</em></p>
        </div>
    </article>

    <a href="/blog" class="btn btn-primary mt-3">Back to Blog</a>

    <br>
    <br>
        <br>
    <br>    <br>
    <br>
        <br>
    <br>

    <!-- End of Main Content -->
@endsection