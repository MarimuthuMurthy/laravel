<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class clientController extends Controller
{
    public function getAllPosts()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $response->json();
    }
    public function getPostById($id)
    {
        $post = Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $post->json();
    }
    public function addPost()
    {
        $post = Http::post('https://jsonplaceholder.typicode.com/posts',[
            'userId'=>1,
            'title'=>'new post',
            'body'=>'new post description'
        ]);
        return $post->json();
    }
    public function updatePost()
    {
        $response = Http::put('https://jsonplaceholder.typicode.com/posts/1' , [
            'title'=>'updated title',
            'body'=>'updated body',
        ]);
        return $response->json();
    }
    public function deletePost($id)
    {
        $response = Http::delete('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $response->json();
    }
}
