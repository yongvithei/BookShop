<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Customer extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    public function posOrders(){
        return $this->hasMany(PosOrder::class, 'customer_id', 'id');
    }
}
