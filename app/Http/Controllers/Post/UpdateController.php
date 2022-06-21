<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class UpdateController extends Controller
{
    public function __invoke(Post $post, UpdateRequest $request)
    {
        // TODO: Implement __invoke() method.

        $data = $request->validated();
        $tags = !empty($data['tags']) ? $data['tags'] : null;
        unset($data['tags']);

        $post->update($data);
        $post->tags()->sync($tags);
        return redirect()->route('post.show',$post->id);
    }
}
