@foreach ($posts as $post)
    <h2>{{ $post->title }}</h2>
    <img src="{{ $post->image }}" alt="{{ $post->title }}" width="200">
    <p>{{ $post->content }}</p>
    <a href="{{ route('posts.show', $post->id) }}">Read More</a>
@endforeach
