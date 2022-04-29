<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateComic;
use App\models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::withTrashed()->get();
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
    public function store(StoreUpdateComic $request)
    {      
        $validated = $request->validated();

        $newComic = new Comic();
        $newComic->fill($validated);
        $newComic->save();

        return redirect()->route('comics.show', $newComic);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
        $comic->update($data);

        return redirect(route('comics.show', $comic));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        if (!$comic->trashed()) {
            $comic->delete();
        } else {
            $comic->forceDelete();
        }

        return redirect()->route('comics.index');
    }

    /**
     * Restore the specified soft-deleated resource to storage
     * 
     * @param  \App\models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function restore(Comic $comic)
    {
        $comic->restore();

        return redirect()->route('comics.index');
    }
}
