<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
   public function destroy(Post $post){
    $post->delete();
    return redirect()->route('main.index');
   }
}
