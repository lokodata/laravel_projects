<x-app-layout>
    <h1 class="text-lg font-bold text-blue-500">{{ Str::title($tag) }}</h1>
    <div class="mt-3 space-y-16">
        @if ($posts->count())
            @foreach ($posts as $post)
                <x-post-list-item :post="$post" />
            @endforeach
            {{ $posts->links() }}
        @endif
    </div>
</x-app-layout>
