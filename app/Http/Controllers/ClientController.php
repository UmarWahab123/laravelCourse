<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    //to get all the post type this method
    public function getAllPost()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $response->json();
    }

    //to get post by id type this method
    public function getPostById($id)
    {
        $post = Http::get('https://jsonplaceholder.typicode.com/posts' . $id);
        return $post->json();

    }
    //to add post type this method
    public function addPost()
    {
        $post = Http::post('https://jsonplaceholder.typicode.com/posts', [
            'userId' => 1,
            'title' => 'New Post Title',
            'body' => 'New Post Description',
        ]);
        return $post->json();

    }
    //to put request for update type this this method
    public function updatePost()
    {
        $response = Http::put('https://jsonplaceholder.typicode.com/posts/1', [
            'title' => 'Updated Title',
            'body' => 'Updated Description', //why this , is not remove
        ]);
        return $response->json();
    }
    //to delete http request type this method
    public function deletePost($id)
    {
        $response = Http::delete('https://jsonplaceholder.typicode.com/posts' . $id);
        return $response->json();
    }

}
