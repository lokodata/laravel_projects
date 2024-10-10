<?php

namespace App\Http\Controllers;

use Spatie\Sheets\Sheets;
use Illuminate\Support\Collection;

class PostIndexController extends Controller
{
    public function __invoke(Sheets $sheets)
    {
        return view('posts.index', [
            'posts' => $sheets->collection('posts')->all()->sortByDesc('date')->paginate(10),
        ]);
    }
}
