<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'ref';
    protected $table = 'tbl_criteria';

    public function tags()
    {
        return $this->hasMany(Tag::class, 'criteria', 'ref');
    }
}
