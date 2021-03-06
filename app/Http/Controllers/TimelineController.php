<?php

namespace App\Http\Controllers;

use App\Models\Pick;
use App\Models\Tag;
use App\Models\News;
use App\Models\Category;
use Illuminate\Http\Request;

class TimelineController extends Controller
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
    public function index(Request $request)
    {
        $categories = $this->categories->all();
        if ($request->filled('keyword')) {
            $news = $this->news->select('media', 'ref', 'Tanggal', 'Headline', 'Rangkuman', 'image', 'ekstensi', 'UserUpdate', 'DateUpdate')->where(['approval' => 1])->where('Headline', 'like', '%' . $request->keyword . '%')
                ->whereHas('tags')->orderBy('Tanggal', 'desc')->simplePaginate();
        } else {
            $news = $this->news->select('media', 'ref', 'Tanggal', 'Headline', 'Rangkuman', 'image', 'ekstensi', 'UserUpdate', 'DateUpdate')->where(['approval' => 1])->whereHas('tags')->orderBy('Tanggal', 'desc')->simplePaginate();
        }
        return view('timeline', compact('categories', 'news'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
