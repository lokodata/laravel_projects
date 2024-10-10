<article class="prose">
    <h1 class="text-3xl font-bold not-prose"><a href="{{ route('posts.show', $post->slug) }}"
            class="transition-colors duration-100 hover:text-blue-500">
            {{ $post->title }}
        </a></h1>

    <div class="mt-3 text-md">{{ $post->teaser }}</div>

    <x-post-meta :post="$post" />
</article>
