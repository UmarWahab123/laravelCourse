<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //function which fetch all post from the database
    public function getAllPost()
    {
        $posts = DB::table('posts')->get();
        return view('posts', compact('posts'));
    }
    //function for create post
    public function addPost()
    {
        return view('add-post');
    }
    //to post into the database
    public function addPostSubmit(Request $request)
    {
        DB::table('posts')->insert([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        //for feedback response msg type
        return redirect('/posts')->with('post-created', 'post has been created successfully!');
    }
    //a method to fetch the post by their Id's
    public function getPostById($id)
    {
        $post = DB::table('posts')->where('id', $id)->first();
        return view('sigle-post', compact('post'));
    }
    //a method to delete the post
    public function deletePost($id)
    {
        DB::table('posts')->where('id', $id)->delete();
        return back()->with('post-deleted', 'Post has been deleted successfully!');
    }
    //a method for edit the post
    public function editPost($id)
    {
        $post = DB::table('posts')->where('id', $id)->first();
        return view('edit-post', compact('post'));
    }
    //a method for update the post
    public function updatePost(Request $request)
    {
        DB::table('posts')->where('id', $request->id)->update([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        return redirect('/posts')->with('post_updated', 'post has been updated successfully!');
    }
    //create a function for inner join
    public function innerClause()
    {
        $request = DB::table('users')
            ->join('posts', 'users.id', '=', 'posts.user_id')
            ->select('users.name', 'posts.title', 'posts.body')
            ->get();
        return $request;
    }
    //create a method for leftJOin
    public function leftJoinClause()
    {
        $result = DB::table('users')
            ->leftJoin('posts', 'users.id', '=', 'posts.user_id')
            ->get();
        return $result;
    }
    //create a method for RightJOin
    public function RightJoinClause()
    {
        $result = DB::table('users')
            ->rightJoin('posts', 'users.id', '=', 'posts.user_id')
            ->get();
        return $result;
    }
    //create a method to  fetch all the posts from the posts table by using Model
    public function getAllPostUsingModel()
    {
        $posts = Post::all();
        return $posts;
    }
    //create a method to  fetch all the record from the users table by using Model
    public function getAllPostsUsingModel()
    {
        $users = Users::all();
        return $users;
    }
}
