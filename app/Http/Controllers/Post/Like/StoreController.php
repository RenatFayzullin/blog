<?php

namespace App\Http\Controllers\Post\Like;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostUserLike;

class StoreController extends Controller
{
    public function __invoke(Post $post)
    {
//        dd(auth()->user()->likedPosts);
        auth()->user()->likedPosts()->toggle($post->id);
//        $data['user_id']= auth()->user()->id;
//        $data['post_id']= $post->id;
//
//        $like = PostUserLike::where($data)->count() > 0;
//        dd($like);
//        if ($like){
//            dd(43);
//        }
//        else{
//
//        }
//
//        PostUserLike::firstOrCreate($data);

        return redirect(route('post.index'));
    }
}
