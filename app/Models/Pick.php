<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pick extends Model
{
    use HasFactory;

    protected $primaryKey = 'ref';

    protected $table = 'tbl_pick';

    public function news()
    {
        return $this->hasOne(News::class, 'ref', 'ref_news');
    }
}
