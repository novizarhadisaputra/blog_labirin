<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Pick;
use App\Models\News;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Builder;
use Symfony\Component\Console\Output\ConsoleOutput;

class WelcomeController extends Controller
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
        $this->tags = $tags;
        $this->news = $news;
        $this->pick = $pick;
    }

    public function index()
    {
        $categories = $this->categories->all();
        $picks = $this->pick->whereHas('news')->orderBy('Tanggal', 'desc')->groupBy('ref_news')->paginate(5);

        $economies = $this->news->whereHas('tags', function (Builder $query) {
            $query->whereHas('criteria', function (Builder $query) {
                $query->where(['ref' => self::EKONOMI]);
            });
        })->orderBy('Tanggal', 'desc')->paginate(5);

        $socials = $this->news->whereHas('tags', function (Builder $query) {
            $query->whereHas('criteria', function (Builder $query) {
                $query->where(['ref' => self::SOSIAL]);
            });
        })->orderBy('Tanggal', 'desc')->paginate(5);

        return view('welcome', compact('socials', 'economies', 'categories', 'picks'));
    }
}
