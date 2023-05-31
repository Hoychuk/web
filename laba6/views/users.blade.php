<h1>List of Users</h1>
<ul>
    @foreach($users as $user)
        <li>{{ $user->name }}</li>
        <ul>{{$user->roles()->pluck('name')->implode(', ')}}</ul>
        <ul>
            @foreach($user->posts as $post)
                <ul>{{ $post->title}}</ul>
                <ul>{{ $post->content }}</ul>
            @endforeach
        </ul>
    @endforeach
</ul>
