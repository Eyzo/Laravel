<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{


    public function index() {

        $posts = Posts::visible()->whereRaw('created_at < NOW()')->get()->toArray();

        $posts = array_chunk($posts,4);

        return view('website/index',[
            'title' => 'Home page',
            'posts' => $posts
        ]);
    }

    public function singleView($id) {

        $post = Posts::with('category')->with('tags')->find($id);
        $tags = $post->tags;
        $category = $post->category;

        return view('website/single_view', [
            'title' => 'Single Vew Home',
            'post' => $post,
            'category' => $category,
            'tags' => $tags
        ]);
    }

}
