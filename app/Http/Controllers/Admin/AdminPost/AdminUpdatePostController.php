<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers\Admin\AdminPost;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\Post\UpdateRequest;

class AdminUpdatePostController extends AdminBaseController
{
    public function update(UpdateRequest $request,Post $post)
    {
        $data = $request->validated();
        $this->service->update( $post,$data );


        return redirect()->route('admin.post.show', $post->id);
    }
}
