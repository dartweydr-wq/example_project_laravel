<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class DestroyController extends Controller
{
    public function __invoke(Post $post)
    {
        // TODO: Implement __invoke() method.

        $post->delete();
        return redirect()->route('post.index');
    }
}
