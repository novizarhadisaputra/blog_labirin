<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $primaryKey = 'ref';
    protected $table = 'tbl_tag';
    protected $appends = ['total_news', 'id_news'];

    public function criteria()
    {
        return $this->hasOne(Category::class, 'ref', 'criteria');
    }

    public function news()
    {
        return $this->belongsToMany(News::class, 'con_tag_news', 'ref_tag', 'ref_news');
    }

    public function getTotalNewsAttribute()
    {
        return $this->news()->count();
    }

    public function getIdNewsAttribute()
    {
        return $this->news()->pluck('ref_news');
    }
}
