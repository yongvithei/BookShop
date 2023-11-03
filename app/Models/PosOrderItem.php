<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PosOrderItem extends Model
{
    use HasFactory;
    protected $fillable =[
        'price',
        'pro_qty',
        'product_id',
        'pos_order_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
