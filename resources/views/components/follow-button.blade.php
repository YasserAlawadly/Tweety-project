@unless(current_user()->is($user))
    <form action="/profiles/{{ $user->username }}/follow" method="post">
        @csrf
        <button type="submit" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-sm">
            {{ auth()->user()->following($user) ? 'Unfollow Me' : 'Follow Me' }}
        </button>
    </form>
@endunless
