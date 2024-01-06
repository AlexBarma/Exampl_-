<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\UpdateRequest;

class UpdateController extends Controller
{
    public function update(UpdateRequest $request,Post $post)
    {
        $data = $request->validated();
        $post->update($data);

        return redirect()->route('main.show', $post->id);
    }
}
