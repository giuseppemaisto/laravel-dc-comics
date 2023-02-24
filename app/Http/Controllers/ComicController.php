<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|max:90',
            'description' => 'nullable',
            'type' => 'required|max:20',
            'sale_date' => 'required',
            'price' => 'required',
            'thumb' => 'nullable',
            'series'=> 'required', 
        ]);
        $form_data = $request->all();

        $newComic = new Comic();
        $newComic->title = $form_data['title'];
        $newComic->type = $form_data['type'];
        $newComic->series = $form_data['series'];
        $newComic->sale_date = $form_data['sale_date'];
        $newComic->price = $form_data['price'];
        $newComic->thumb = $form_data['thumb'];
        $newComic->description= $form_data['description'];

        $newComic->save();


        return redirect()->route('comics.show',['comic' => $newComic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = comic::findOrFail($id);
       return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = comic::find($id);

        if($comic){
            $data = [
                'comic' => $comic
            ];

            return view('comics.edit', $data);
        }
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comic = comic::findOrFail($id);

        $request->validate([
            'title' => 'required|max:90',
            'description' => 'nullable',
            'type' => 'required|max:20',
            'sale_date' => 'required',
            'price' => 'required',
            'thumb' => 'nullable',
            'series'=> 'required', 
        ]);
        $form_data = $request->all();

        $comic->update($form_data);

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = comic::findOrFail($id);

        $comic->delete();

        return redirect()->route('comics.index');
    }
}
