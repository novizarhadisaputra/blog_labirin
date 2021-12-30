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
            $query->select('media', 'ref', 'Tanggal', 'Headline', 'Rangkuman', 'image', 'ekstensi', 'UserUpdate', 'DateUpdate')
                ->where(['approval' => 1]);
            $query->whereHas('tags', function (Builder $query) {
                $query->with('criteria');
            });
        })->orderBy('ref_news', 'desc')->limit(5)->get();

        $picks = $this->pick->whereHas('news', function (Builder $query) {
            $query->select('media', 'ref', 'Tanggal', 'Headline', 'Rangkuman', 'image', 'ekstensi', 'UserUpdate', 'DateUpdate')
                ->where(['approval' => 1]);
            $query->whereHas('tags', function (Builder $query) {
                $query->with('criteria');
            });
        })->orderBy('ref_news', 'desc')->limit(5)->get();

        $economiesHot = $this->pick->whereHas('news', function (Builder $query) {
            $query->select('media', 'ref', 'Tanggal', 'Headline', 'Rangkuman', 'image', 'ekstensi', 'UserUpdate', 'DateUpdate')
                ->where(['approval' => 1]);
            $query->whereHas('tags', function (Builder $query) {
                $query->with('criteria');
            });
        })->orderBy('ref_news', 'desc')->limit(10)->get()->random(6);

        $focus = $this->news->select('media', 'ref', 'Tanggal', 'Headline', 'Rangkuman', 'image', 'ekstensi', 'UserUpdate', 'DateUpdate')->where(['approval' => 1])->orderBy('ref', 'desc')->paginate(10)->getCollection()->random(6);
        $request->merge(['page' => 2]);
        $focus2 = $this->news->select('media', 'ref', 'Tanggal', 'Headline', 'Rangkuman', 'image', 'ekstensi', 'UserUpdate', 'DateUpdate')->where(['approval' => 1])->orderBy('ref', 'desc')->paginate(10)->getCollection()->random(6);
        $request->merge(['page' => 3]);
        $focus3 = $this->news->select('media', 'ref', 'Tanggal', 'Headline', 'Rangkuman', 'image', 'ekstensi', 'UserUpdate', 'DateUpdate')->where(['approval' => 1])->orderBy('ref', 'desc')->paginate(10)->getCollection()->random(6);

        $economies = $this->news->select('media', 'ref', 'Tanggal', 'Headline', 'Rangkuman', 'image', 'ekstensi', 'UserUpdate', 'DateUpdate')->where(['approval' => 1])->whereHas('tags', function (Builder $query) {
            $query->whereHas('criteria', function (Builder $query) {
                $query->where(['ref' => self::EKONOMI]);
            })->with('criteria');
        })->orderBy('Tanggal', 'desc')->limit(5)->get();

        $socials = $this->news->select('media', 'ref', 'Tanggal', 'Headline', 'Rangkuman', 'image', 'ekstensi', 'UserUpdate', 'DateUpdate')->where(['approval' => 1])->whereHas('tags', function (Builder $query) {
            $query->whereHas('criteria', function (Builder $query) {
                $query->where(['ref' => self::SOSIAL]);
            })->with('criteria');
        })->orderBy('Tanggal', 'desc')->limit(5)->get();

        $sumberdaya = $this->news->select('media', 'ref', 'Tanggal', 'Headline', 'Rangkuman', 'image', 'ekstensi', 'UserUpdate', 'DateUpdate')->where(['approval' => 1])->whereHas('tags', function (Builder $query) {
            $query->whereHas('criteria', function (Builder $query) {
                $query->where(['ref' => self::SUMBERDAYAALAM]);
            })->with('criteria');
        })->orderBy('Tanggal', 'desc')->limit(5)->get();

        $birokrasi = $this->news->select('media', 'ref', 'Tanggal', 'Headline', 'Rangkuman', 'image', 'ekstensi', 'UserUpdate', 'DateUpdate')->where(['approval' => 1])->whereHas('tags', function (Builder $query) {
            $query->whereHas('criteria', function (Builder $query) {
                $query->where(['ref' => self::BIROKRASI]);
            })->with('criteria');
        })->orderBy('Tanggal', 'desc')->limit(5)->get();

        return view('welcome', compact('economiesHot', 'focus', 'focus2', 'focus3', 'socials', 'economies', 'categories', 'sumberdaya', 'birokrasi', 'hotNews', 'picks'));
    }
}
