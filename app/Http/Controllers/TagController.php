<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Pick;
use App\Models\News;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    protected $categories, $pick, $tags, $news;

    public function __construct(Tag $tags, Pick $pick, Category $categories, News $news)
    {
        $this->categories = $categories;
        $this->pick = $pick;
        $this->tags = $tags;
        $this->news = $news;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = $this->categories->all();

        return view('tags.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        $categories = $this->categories->all();
        $news = $tag->news()->paginate(10);
        $pick = $this->pick->whereHas('news')->orderBy('Tanggal', 'desc')->groupBy('ref_news')->paginate(5);
        return view('tags.index', compact('categories', 'tag', 'news', 'pick'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        //
    }
}
