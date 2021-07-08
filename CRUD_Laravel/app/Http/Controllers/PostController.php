<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    public function addPost() {

        return view('add-list');

    }

    public function savePost(Request $request) {
        DB::table('posts')->insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'age'=>$request->age
        ]);

        return back()->with('post-add', 'Post added successfully');
    }

    public function postList() {
        $posts = DB::table('posts')->get();

        return view('post-list', compact('posts'));
    }

    public function editPost($id) {
        $post = DB::table('posts')->where('id', $id)->first();

        return view('edit-post', compact('post'));
    }

    public function updatePost(Request $request) {
        DB::table('posts')->where('id', $request->id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'age'=>$request->age
        ]);

        return back()->with('post_update', 'Post updated successfully');
    }

    public function deletePost($id) {
        DB::table('posts')->where('id', $id)->delete();

        return back()->with('post_delete', 'Post deleted successfully');
    }
}
