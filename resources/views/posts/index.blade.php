<h1>Daftar Posts</h1>

@foreach ($posts as $post)
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->body }}</p>
@endforeach
