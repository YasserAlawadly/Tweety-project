<x-app>
    <form action="{{ $user->path() }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">Name</label>

            <input class="border border-gray-400 p-2 w-full" type="text" name="name" id="usernamename" required value="{{ $user->name }}">

            @error('name')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="username">Username</label>

            <input class="border border-gray-400 p-2 w-full" type="text" name="username" id="username" required value="{{ $user->username }}">

            @error('username')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="avatar">avatar</label>

            <div class="flex">
                <input class="border border-gray-400 p-2 w-full" type="file" name="avatar" id="avatar">
                <img src="{{ $user->avatar }}" alt="your avatar" width="40">
            </div>

            @error('avatar')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">Email</label>

            <input class="border border-gray-400 p-2 w-full" type="email" name="email" id="email" required value="{{ $user->email }}">

            @error('email')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">password</label>

            <input class="border border-gray-400 p-2 w-full" type="password" name="password" id="password" required>

            @error('password')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password_confirmation">password Confirmation</label>

            <input class="border border-gray-400 p-2 w-full" type="password" name="password_confirmation" id="password_confirmation" required>

            @error('password_confirmation')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500" type="submit">Submit</button>
            <a href="{{ $user->path() }}" class="bg-red-400 text-white rounded py-2 px-4 hover:bg-red-500">Cancle</a>
        </div>

    </form>
</x-app>
