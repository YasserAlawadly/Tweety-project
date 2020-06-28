<x-master>
    <section class="px-8">
        <main class="container mx-auto">
            <div class="lg:flex lg:justify-between">
                @if(auth()->check())
                    <div class="lg:w-1/6">
                        @include('sidebar-links')
                    </div>
                @endif

                <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">

                    {{ $slot }}

                </div>

                @if(auth()->check())
                    <div class="lg:w-1/6">
                        @include('friends-list')
                    </div>
                @endif
            </div>
        </main>
    </section>
</x-master>

