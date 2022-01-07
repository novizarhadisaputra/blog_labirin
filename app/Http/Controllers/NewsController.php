<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\News;
use App\Models\Pick;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\Builder;

class NewsController extends Controller
{
    protected $categories, $http, $pick, $tags, $news;

    public function __construct(Tag $tags, Pick $pick, Http $http, Category $categories, News $news)
    {
        $this->categories = $categories;
        $this->pick = $pick;
        $this->tags = $tags;
        $this->news = $news;
        $this->http = $http;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = $this->categories->all();
        $news = $this->news->select('media', 'ref', 'Tanggal', 'Headline', 'Rangkuman', 'image', 'ekstensi', 'UserUpdate', 'DateUpdate')
            ->orderBy('Tanggal', 'desc')
            ->where(['approval' => 1])->paginate(10);
        $picks = $this->pick->whereHas('news', function (Builder $query) {
            $query->select('media', 'ref', 'Tanggal', 'Headline', 'Rangkuman', 'image', 'ekstensi', 'UserUpdate', 'DateUpdate');
            $query->where(['approval' => 1]);
            $query->whereHas('tags', function (Builder $query) {
                $query->with('criteria');
            });
            $query->orderBy('Tanggal', 'desc');
        })->orderBy('Tanggal', 'desc')->groupBy('ref_news')->paginate(5);

        return view('news.index', compact('categories', 'picks', 'news'));
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
    public function show($id, $slug = null)
    {
        $news = $this->news->find($id);
        $response = Http::get("https://mining.labirin.id/recommender_base/$id");
        $json = $response->json();
        $related = json_decode(json_encode($json));
        $pick = $this->pick->whereHas('news')->orderBy('Tanggal', 'desc')->groupBy('ref_news')->limit(5)->get();
        $categories = $this->categories->all();

        return view('news.detail', compact('news', 'related', 'pick', 'categories'));
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
