<?php

namespace App\Http\Controllers;

use App\Links;
use Illuminate\Support\Facades\Input;

class LinkController extends Controller
{
    //
    public function __construct()
    {
    }

    public function create() {


        return view('links/create',[
            'title' => 'je suis la page de creation de lien'
        ]);
    }

    public function store() {

        $inputUrl = Input::get('link');

        $link = Links::where('url',$inputUrl)->first();

        if (!$link) {

            $link = new Links([
                'url' => $inputUrl
            ]);

            $link->save();

        }

        return view('links/create_success',[
            'title' => 'page succés enregistrement',
           'link' => $link
        ]);
    }

    public function show($id) {

        $link = Links::findOrFail($id);

        return view('links/show_unique', [
            'title' => 'Page du lien '.$link->id,
            'link' => $link
        ]);

    }

}
