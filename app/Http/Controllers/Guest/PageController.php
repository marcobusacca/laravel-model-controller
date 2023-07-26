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

        $comic = Comic::find($id);

        if ($comic){

            return view('comics.show', compact('comic'));

        } else{
            
            abort('404');
        }
    }
}