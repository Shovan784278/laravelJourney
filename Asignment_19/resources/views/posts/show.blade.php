

<h2>{{ $post->title }}</h2>
<img src="{{ $post->image }}" alt="{{ $post->title }}" width="200">
<p>{{ $post->content }}</p>

<h3>Comments:</h3>
@foreach ($post->comments as $comment)
    <p>{{ $comment->name }} - {{ $comment->content }}</p>
@endforeach

<h3>Add a Comment:</h3>
<form action="{{ route('comments.store', $post->id) }}" method="POST">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="content">Content:</label>
        <textarea name="content" id="content" required></textarea>
    </div>
    <button type="submit">Submit</button>
</form>
