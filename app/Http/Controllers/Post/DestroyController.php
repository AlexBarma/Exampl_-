<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DestroyController extends BaseController
{
   public function destroy(Post $post){
    $post->delete();
    return redirect()->route('main.index');
   }
}
