<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Admin\AdminPost;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminDestroyPostController extends AdminPostController
{
    public function destroy(Post $post){
        $post->delete();
        return redirect()->route('admin.post.index');
       }
}
