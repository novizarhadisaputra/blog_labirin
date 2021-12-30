<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\News;
use App\Models\Pick;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class CategoryController extends Controller
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
        $count = 0;
        $id_news = [];
        $collection = [];
        foreach ($categories as $i => $category) {
            foreach ($category->tags as $tag) {
                $count = $count + $tag->total_news;
                $id_news = array_merge($id_news, $tag->id_news->toArray());
            }
            $category = json_decode(json_encode($category->toArray()));
            $category->news = $this->news
                ->select('media', 'ref', 'Tanggal', 'Headline', 'Rangkuman', 'image', 'ekstensi', 'UserUpdate', 'DateUpdate')
                ->whereIn('ref', $id_news)->where('Tanggal', '<=', date('Y-m-d'))->orderBy('Tanggal', 'desc')->limit(10)->get();
            $collection[] = $category;
        }
        $categories = $collection;
        $picks = $this->pick->whereHas('news', function (Builder $query) {
            $query->select('media', 'ref', 'Tanggal', 'Headline', 'Rangkuman', 'image', 'ekstensi', 'UserUpdate', 'DateUpdate')
                ->where(['approval' => 1]);
            $query->whereHas('tags', function (Builder $query) {
                $query->with('criteria');
            });
        })->orderBy('Tanggal', 'desc')->groupBy('ref_news')->limit(5)->get();

        return view('category.index', compact('categories', 'picks'));
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
        $categories = $this->categories->all();
        $category = $this->categories->find($id);
        $count = 0;
        $id_news = [];
        foreach ($category->tags as $tag) {
            $count = $count + $tag->total_news;
            $id_news = array_merge($id_news, $tag->id_news->toArray());
        }
        $news = $this->news->whereIn('ref', $id_news)->orderBy('Tanggal', 'desc')->paginate(10);
        $pick = $this->pick->whereHas('news')->orderBy('Tanggal', 'desc')->groupBy('ref_news')->limit(5)->get();

        return view('category.show', compact('categories', 'category', 'news', 'count', 'pick'));
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
