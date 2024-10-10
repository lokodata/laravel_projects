<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Spatie\Sheets\Sheets;

class TagShowController extends Controller
{
    public function __invoke($tag, Sheets $sheets)
    {
        $posts = $sheets->collection('posts')
            ->all()
            ->filter(function (Post $post) use ($tag) {
                return in_array($tag, $post->tags);
            })
            ->sortByDesc('date')
            ->paginate(10);

        abort_if($posts->isEmpty(), 404);

       return view('tags.show', [
              'tag' => $tag,
           'posts' => $posts,
       ]);
    }
}
