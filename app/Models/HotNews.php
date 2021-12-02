<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotNews extends Model
{
    use HasFactory;

    protected $primaryKey = 'ref';

    protected $table = 'tbl_hotnews';

    public function news()
    {
        return $this->hasOne(News::class, 'ref', 'ref_news');
    }
}
