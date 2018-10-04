<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 10/3/18
 * Time: 9:51 AM
 */

namespace App\Http\Controllers;


use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function get() {
        $posts = Post::all();
        return view('admin.posts', ['posts' => $posts]);
    }

    public function getNew() {
        return view('admin.newPost');
    }

    public function createPost(Request $request) {
            $data = $request->all();

            // validate the submitted form data
            $validate = Validator::make($data, [
                'title' => 'required|string|max:100',
                'content' => 'required',
            ]);

            if ($validate->fails()) {
                return redirect('/admin/post/new')
                    ->withErrors($validate)
                    ->withInput();
            } else {
                // get Authenticated user and add as composer of this post
                $newPost = new Post;
                $newPost->title = $data['title'];
                $newPost->content = $data['content'];
                $newPost->user_id = Auth::id();
                $newPost->save();

                // redirect to contact form with success message
                $success = 'Post successfully created!';

                $request->session()->flash('success', $success);
                return redirect('/admin/post/new');
            }
    }
}