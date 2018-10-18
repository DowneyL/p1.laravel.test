<a href="{{ route('users.show', $user->id) }}" class="d-block p-2">
    <img src="{{ $user->gravatar('60') }}" alt="{{ $user->name }}" class="gravatar rounded-circle"/>
</a>
<p class="pb-2 m-0">{{ $user->name }}</p>