<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\UpdateRequest;

class UpdateController extends BaseController
{
    public function update(UpdateRequest $request,Post $post)
    {
        $data = $request->validated();
        $this->service->update( $post,$data );


        return redirect()->route('main.show', $post->id);
    }
}
