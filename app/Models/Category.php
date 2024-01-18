<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'cat_kh',
        'desc',
        'slug',
        'status',
    ];
    // Define the relationship to SubCategory model
    public function subcategories()
    {
        return $this->hasMany(SubCategory::class, 'cat_id');
    }
}
