<?php

namespace App\Http\Controllers;

use App\Http\Requests\Search;
use App\Models\Category;
use App\Models\Pick;
use App\Models\News;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class SearchController extends Controller
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
    public function index(Search $request)
    {
        try {
            $orderBy = 'desc';
            $categories = $this->categories->all();

            if ($request->filled('keyword')) {
                $news = $this->news->where(['approval' => 1])
                    ->where('Headline', 'like', '%' . $request->keyword . '%');
            } else {
                $news = $this->news->where(['approval' => 1]);
            }

            if ($request->filled('orderBy')) {
                $orderBy = $request->orderBy;
            }

            if ($request->filled('date')) {
                $news = $news->where('Tanggal', '<=', $request->date);
            } else {
                $news = $news->where('Tanggal', '<=', date('Y-m-d'));
            }

            if ($request->filled('category')) {
                $news = $news->whereHas('tags', function (Builder $query) use ($request) {
                    $query->where(['criteria' => $request->category]);
                });
            } else {
                $news = $news->has('tags');
            }

            $count = $news->select('media', 'ref', 'Tanggal', 'Headline', 'Rangkuman', 'image', 'ekstensi', 'UserUpdate', 'DateUpdate')
                ->orderBy('Tanggal', $orderBy)->count();
            $news = $news->select('media', 'ref', 'Tanggal', 'Headline', 'Rangkuman', 'image', 'ekstensi', 'UserUpdate', 'DateUpdate')
                ->orderBy('Tanggal', $orderBy)->paginate(10);
            $pick = $this->pick->whereHas('news')->orderBy('Tanggal', 'desc')->groupBy('ref_news')->paginate(5);

            return view('search.index', compact('categories', 'pick', 'news', 'count'));
        } catch (\Exception $e) {
            return redirect()->back();
        }
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
