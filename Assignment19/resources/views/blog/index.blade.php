@extends('app')

@section('content')
    <h1>Posts</h1>
    <div class="row" id="postsContainer"></div>
@endsection

@section('scripts')
    <script src="{{ asset('js/axios.min.js') }}"></script>
    <script>
        async function fetchPosts() {
            try {
                const response = await axios.get('/api/posts');
                const posts = response.data;

                const postsContainer = document.getElementById('postsContainer');
                posts.forEach(post => {
                    const postCard = document.createElement('div');
                    postCard.classList.add('col-md-4', 'mb-3');

                    const card = document.createElement('div');
                    card.classList.add('card');

                    const cardBody = document.createElement('div');
                    cardBody.classList.add('card-body');

                    const title = document.createElement('h5');
                    title.classList.add('card-title');
                    title.textContent = post.title;

                    const content = document.createElement('p');
                    content.classList.add('card-text');
                    content.textContent = post.content;

                    cardBody.appendChild(title);
                    cardBody.appendChild(content);

                    card.appendChild(cardBody);
                    postCard.appendChild(card);
                    postsContainer.appendChild(postCard);
                });
            } catch (error) {
                console.error(error);
            }
        }

        fetchPosts();
    </script>
@endsection
