<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory;

    protected $primaryKey = 'ref';
    protected $table = 'tbl_news';

    protected $appends = ['slug'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'con_tag_news', 'ref_news', 'ref_tag');
    }

    public function getSlugAttribute()
    {
        if ($this->attributes['Headline']) {
            return Str::slug($this->attributes['Headline']);
        }
        return '';
    }
}
