<h1>List of Posts</h1>
<ul>
    @foreach($posts as $post)
        <li>{{ $post->title }}</li>
        <li>{{ $post->content }}</li>
    @endforeach
</ul>
