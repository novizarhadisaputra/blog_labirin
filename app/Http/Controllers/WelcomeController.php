<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\News;
use App\Models\Pick;
use App\Models\HotNews;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Symfony\Component\Console\Output\ConsoleOutput;

class WelcomeController extends Controller
{
    const EKONOMI = 2;
    const SOSIAL = 3;
    const SUMBERDAYAALAM = 4;
    const BIROKRASI = 5;
    const INFRASTRUKTUR = 6;

    protected $categories, $pick, $tags, $hotNews, $news;

    public function __construct(Tag $tags, HotNews $hotNews, Pick $pick, Category $categories, News $news)
    {
        $this->categories = $categories;
        $this->tags = $tags;
        $this->news = $news;
        $this->pick = $pick;
        $this->hotNews = $hotNews;
    }

    public function index(Request $request)
    {
        $categories = $this->categories->all();
        $hotNews = $this->hotNews->whereHas('news', function (Builder $query) {
            $query->whereHas('tags', function (Builder $query) {
                $query->with('criteria');
            });
        })->orderBy('ref_news', 'desc')->paginate(5);

        $picks = $this->pick->whereHas('news', function (Builder $query) {
            $query->whereHas('tags', function (Builder $query) {
                $query->with('criteria');
            });
        })->orderBy('ref_news', 'desc')->paginate(5);

        $economiesHot = $this->pick->whereHas('news', function (Builder $query) {
            $query->whereHas('tags', function (Builder $query) {
                $query->with('criteria');
            });
        })->orderBy('ref_news', 'desc')->paginate(50)->getCollection()->random(6);

        $focus = $this->news->where(['approval' => 1])->orderBy('ref', 'desc')->paginate(50)->getCollection()->random(6);
        $request->merge(['page' => 2]);
        $focus2 = $this->news->where(['approval' => 1])->orderBy('ref', 'desc')->paginate(50)->getCollection()->random(6);
        $request->merge(['page' => 3]);
        $focus3 = $this->news->where(['approval' => 1])->orderBy('ref', 'desc')->paginate(50)->getCollection()->random(6);

        $economies = $this->news->where(['approval' => 1])->whereHas('tags', function (Builder $query) {
            $query->whereHas('criteria', function (Builder $query) {
                $query->where(['ref' => self::EKONOMI]);
            })->with('criteria');
        })->orderBy('Tanggal', 'desc')->paginate(5);

        $socials = $this->news->where(['approval' => 1])->whereHas('tags', function (Builder $query) {
            $query->whereHas('criteria', function (Builder $query) {
                $query->where(['ref' => self::SOSIAL]);
            })->with('criteria');
        })->orderBy('Tanggal', 'desc')->paginate(5);

        $sumberdaya = $this->news->where(['approval' => 1])->whereHas('tags', function (Builder $query) {
            $query->whereHas('criteria', function (Builder $query) {
                $query->where(['ref' => self::SUMBERDAYAALAM]);
            })->with('criteria');
        })->orderBy('Tanggal', 'desc')->paginate(5);

        $birokrasi = $this->news->where(['approval' => 1])->whereHas('tags', function (Builder $query) {
            $query->whereHas('criteria', function (Builder $query) {
                $query->where(['ref' => self::BIROKRASI]);
            })->with('criteria');
        })->orderBy('Tanggal', 'desc')->paginate(5);

        return view('welcome', compact('economiesHot', 'focus', 'focus2', 'focus3', 'socials', 'economies', 'categories', 'sumberdaya', 'birokrasi', 'hotNews', 'picks'));
    }
}
