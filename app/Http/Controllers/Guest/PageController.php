<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class PageController extends Controller
{
    public function index(){

        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    public function show($id){

        $comics = Comic::all();

        if ($id >= 0 && $id < count($comics)){

            $comic = $comics[$id];

            return view('comics.show', compact('comic'));

        } else{
            abort('404');
        }
    }
}