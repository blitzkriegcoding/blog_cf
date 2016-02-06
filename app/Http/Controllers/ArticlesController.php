<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Article;
use App\Category;
use App\Tag;
use App\Image;
use Laracasts\Flash\Flash;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $articles = Article::search($request->title)->orderBy('id','DESC')->paginate(5);

        $articles->each(
        function($articles)
            {
                $articles->category;
                $articles->user;                
            }
        );

        return view('admin.articles.index')->with(['articles' => $articles]);
    }

    public function create()
        {
            $categories = Category::orderBy('name','ASC')->lists('name','id');
            #dd($categories);
            $tags = Tag::orderBy('name', 'ASC')->lists('name','id');

            return view('admin.articles.create')->with(['categories' => $categories, 'tags' => $tags]);
        }


    public function store(ArticleRequest $request)
        {
            
            if($request->file('image'))
                {
                    $file = $request->file('image');
                    $name = "blogfacilito_" . time() . bcrypt(\Auth::user()) . "." . $file->getClientOriginalExtension();
                    $path = public_path() . "/images/articles/";
                    $file->move($path, $name);
                }

            $article = new Article($request->all());
            $article->user_id = \Auth::user()->id;
            $article->save();

            $article->tags()->sync($request->tags);

            $image = new Image();
            $image->name = $name;
            $image->article()->associate($article);
            $image->save();

            Flash::success("El articulo ".$article->title." se ha creado satisfactoriamente!");

            return redirect()->route('admin.articles.index');

        }


    public function show($id)
    {
        //
    }


    public function edit($id)
        {

            $article = Article::find($id);
            $article->category;
            $categories = Category::orderBy('name', 'DESC')->lists('name','id');
            $tags = Tag::orderBy('name', 'DESC')->lists('name','id');

            $my_tags = $article->tags->lists('id')->ToArray();

            return view('admin.articles.edit')->with(
                ['categories'   =>  $categories, 
                    'article'   =>  $article,
                    'tags'      =>  $tags,
                    'my_tags'   =>  $my_tags
                ]);
        }

    public function update(Request $request, $id)
        {
            //
        }


    public function destroy($id)
        {
            //
        }
}
