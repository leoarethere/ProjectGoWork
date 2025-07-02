@extends('layouts.main')

@section('container')
    <!-- Main Content -->
    <br>
    <article>
    @foreach ($posts as $post)
        <div class="post mb-5">
            <h2>
                <a href="/blog/{{ $post["slug"] }}">{{ $post["title"] }}</a>
            </h2>
            <p><strong>Author:</strong> {{ $post["author"] }}</p>
            <p>{{ $post["body"] }}</p>
        </div>
        <hr>
    </article>
    @endforeach
    <div class="pagination">
        <!-- Pagination links can be added here -->
        <a href="#">Previous</a>
        <a href="#">Next</a>
    </div>
    <br>
    <br>
    <!-- End of Main Content -->
@endsection