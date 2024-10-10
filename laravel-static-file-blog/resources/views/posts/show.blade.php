<x-app-layout>
    <article class="prose prose-lg">
        <h1>{{ $post->title }}</h1>
        <div>
            {{ $post->author }} /
            {{ $post->date->toDateString('Y:m:d') }}
        </div>
        @if (count($post->tags))
            <ul class="flex items-end p-0 mt-1 space-x-1 list-none not-prose">
                @foreach ($post->tags as $tag)
                    <li class="text-md">
                        <a href="{{ route('tags.show', $tag) }}" class="text-blue-500">
                            {{ Str::title($tag) }}
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif
        <div>
            {{ $post->contents }}
        </div>
    </article>
</x-app-layout>
