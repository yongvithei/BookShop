<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'sub_name',
        'sub_kh',
        'cat_id',
        'sub_slug',
        'status',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }
}
