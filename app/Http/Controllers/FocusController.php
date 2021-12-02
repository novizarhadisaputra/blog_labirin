<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\News;
use App\Models\Pick;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class FocusController extends Controller
{
    const EKONOMI = 2;
    const SOSIAL = 3;
    const SUMBERDAYAALAM = 4;
    const BIROKRASI = 5;
    const INFRASTRUKTUR = 6;

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
        $picks = $this->pick->whereHas('news', function (Builder $query) {
            $query->whereHas('tags', function (Builder $query) {
                $query->with('criteria');
            });
        })->orderBy('ref_news', 'desc')->paginate(5);

        $economies = $this->news->whereHas('tags', function (Builder $query) {
            $query->whereHas('criteria', function (Builder $query) {
                $query->where(['ref' => self::EKONOMI]);
            })->with('criteria');
        })->orderBy('Tanggal', 'desc')->paginate(50)->getCollection()->random(6);

        $socials = $this->news->whereHas('tags', function (Builder $query) {
            $query->whereHas('criteria', function (Builder $query) {
                $query->where(['ref' => self::SOSIAL]);
            })->with('criteria');
        })->orderBy('Tanggal', 'desc')->paginate(50)->getCollection()->random(6);

        $sumberdaya = $this->news->whereHas('tags', function (Builder $query) {
            $query->whereHas('criteria', function (Builder $query) {
                $query->where(['ref' => self::SUMBERDAYAALAM]);
            })->with('criteria');
        })->orderBy('Tanggal', 'desc')->paginate(50)->getCollection()->random(6);

        $birokrasi = $this->news->whereHas('tags', function (Builder $query) {
            $query->whereHas('criteria', function (Builder $query) {
                $query->where(['ref' => self::BIROKRASI]);
            })->with('criteria');
        })->orderBy('Tanggal', 'desc')->paginate(50)->getCollection()->random(6);

        $infrastruktur = $this->news->whereHas('tags', function (Builder $query) {
            $query->whereHas('criteria', function (Builder $query) {
                $query->where(['ref' => self::INFRASTRUKTUR]);
            })->with('criteria');
        })->orderBy('Tanggal', 'desc')->paginate(50)->getCollection()->random(6);
        return view('focus.index', compact('picks', 'categories', 'infrastruktur', 'birokrasi', 'sumberdaya', 'socials', 'economies'));
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
