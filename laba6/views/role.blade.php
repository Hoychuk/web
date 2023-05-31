<h1>List of Roles</h1>
<ul>
    @foreach($roles as $role)
        <li>{{ $role->name }}</li>
        <ul>{{$role->users()->pluck('name')->implode(', ')}}</ul>
    @endforeach
</ul>
