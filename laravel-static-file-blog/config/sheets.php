<?php
use App\ContentParsers\MarkdownWithFrontMatterParser;

return [
    'default_collection' => null,

    'collections' => [

        // An example collection. All keys are optional.

        'posts' => [
            'disk' => 'posts',
            'sheet_class' => App\Models\Post::class,
            'path_parser' => Spatie\Sheets\PathParsers\SlugWithDateParser::class,
            'content_parser' => MarkdownWithFrontMatterParser::class,
            'extension' => 'md',
        ],
    ],
];
