<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\TagRequest;
use Laracasts\Flash\Flash;
use App\Tag;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
        {
            $tags = Tag::search($request->name)->orderBy('id','DESC')->paginate(5);            
            return view('admin.tags.index')->with('tags', $tags);
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
        {
            return view('admin.tags.create');
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagRequest $request)
        {
            $tag = new Tag($request->all());
            $tag->save();

            Flash::success("El tag ".$tag->name." ha sido creada exitosamente");
            return redirect()->route('admin.tags.index');
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $tag = Tag::find($id);
            return view('admin.tags.edit')->with('tag', $tag);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TagRequest $request, $id)
    {
            $tag = Tag::find($id);
            $tag->fill($request->all());
            $tag->save();

            Flash::success("Tag ".$tag->name." fue editada con éxito");
            return redirect()->route('admin.tags.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $tag = Tag::find($id);
            $tag->delete();

            Flash::error('Tag '.$tag->name.' borrada con éxito');

            return redirect()->route('admin.tags.index');
    }
}
