<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $primaryKey = 'ref';
    protected $table = 'tbl_news';

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'con_tag_news', 'ref_news', 'ref_tag');
    }
}
