<x-app-layout>
    <div class="space-y-16">
        @if ($posts->count())
            @foreach ($posts as $post)
                <x-post-list-item :post="$post" />
            @endforeach
            {{ $posts->links() }}
        @else
            <p>Noting here yet.</p>
        @endif
    </div>
</x-app-layout>
