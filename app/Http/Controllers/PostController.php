<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\PostRequest;
use App\Posts;
use App\Tags;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{

    //Controller de la page principale qui s'occupe de lister tous les articles
    public function index() {

        $posts = Posts::get();


        return view('post/index',[
            'posts' => $posts,
            'title' => 'Listing de tous les posts'
        ]);

    }

    //Fonction qui se charge d'insert les données
    public function store() {

        $title = Input::get('title');
        $slug = Input::get('slug');
        $content = Input::get('content');
        $visible = (Input::get('visible') == null? 0 : Input::get('visible'));
        $categorie = Input::get('category_id');
        $tags = Input::get('tags');

        $categorie = Category::find($categorie);
        $post = new Posts(['title' => $title, 'slug' => $slug, 'content' => $content, 'visible' => $visible]);
        $post->category()->associate($categorie);
        $post->save();

        $post->tags()->sync($tags);
        $post->save();

        return redirect(route('news.index'),301);
    }

    //Controller de la vue de creation
    public function create() {
        $categories = Category::pluck('name','id')->toArray();
        $tags = Tags::pluck('name','id')->toArray();

        return view('post/create',[
            'title' => "Page de creation d'un post",
            'categories' => $categories,
            'tags' => $tags
        ]);
    }

    //Fonction se chargant de delete un objet
    public function destroy($id) {

        $post = Posts::findOrFail($id);
        $post->delete();

        return redirect(route('news.index'),301);

    }

    //Fonction se chargeant de mettre a jour les données
    public function update($id, PostRequest $request) {

        $title = Input::get('title');
        $slug = Input::get('slug');
        $content = Input::get('content');
        $visible = (Input::get('visible') == null? 0 : Input::get('visible'));
        $category = Input::get('category_id');
        $tags = Input::get('tags');

        $category = Category::find($category);

        $post = Posts::findOrFail($id);

        $post->title = $title;
        $post->slug = $slug;
        $post->content = $content;
        $post->visible = $visible;
        $post->category()->associate($category);
        $post->tags()->sync($tags);
        $post->save();

        Session::flash('success',"l'update à bien était effectué");

        return redirect(route('news.index'),301);
    }

    //Controller permettant de voir les informations d'un seul element
    public function show($id) {

        $post = Posts::findOrFail($id);

        return view('post/show',[
           'title' => "page de vue d'un post unique",
           'post' => $post
        ]);


    }

    //Controller permettant de voir la vue d'édition
    public function edit($id) {

        $post = Posts::findOrFail($id);
        $categories = Category::pluck('name','id')->toArray();
        $tags = Tags::pluck('name','id')->toArray();

        return view('post/edit',[
            'title' => "page d'edition du post ". $post,
            'post' => $post,
            'categories' => $categories,
            'tags' => $tags
        ]);

    }
}
