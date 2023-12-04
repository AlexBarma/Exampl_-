<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function update(Post $post){
        $data=request()->validate([
            'title'=>'string',
            'content'=>'string',
            'image'=>'string',
        ]);
        $post->update($data);

        return redirect()->route('main.show',$post->id);
    }
}
