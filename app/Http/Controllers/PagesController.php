<?php

namespace App\Http\Controllers;
use App\Models\Comic;


use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $comics = comic::all();
        return view('comics.index', compact('comics'));
        
    }
}
