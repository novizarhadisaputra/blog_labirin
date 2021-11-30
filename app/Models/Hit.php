<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hit extends Model
{
    use HasFactory;

    protected $table = 'tbl_hits';

    public function news()
    {
        return $this->hasOne(News::class, 'ref', 'ref_news');
    }
}
