<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PosOrder extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'amount',
        'payment',
        'received',
        'note',
        'user_id'
    ];

    public function items()
    {
        return $this->hasMany(PosOrderItem::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }


    public function total()
    {
        return $this->items->map(function ($i){
            return $i->price;
        })->sum();
    }

    public function formattedTotal()
    {
        return number_format($this->total(), 2);
    }

    public function receivedAmount()
    {
        return $this->payments->map(function ($i){
            return $i->amount;
        })->sum();
    }
    
}