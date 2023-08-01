<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user','likes')->orderBy('created_at', 'DESC')->paginate(10);

        return view('post.index')->with('posts', $posts);
    }
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store', 'destroy']);
    }
    public function store(Request $request)
    {
    // validate post
        $this->validate($request, [
            'body' => 'required'
    ]);
    // store post
    $request->user()->posts()->create($request->only('body'));

    return redirect()->back();
    }
    public function show(Post $post)
    {
        return view('post.show', [
            'post' => $post
        ]);
    }
    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);
        $post->delete();

        return redirect()->back()->with('message', 'You deleted a post');
    }
}
