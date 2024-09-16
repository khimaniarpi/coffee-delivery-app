<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Voucher;
use App\Models\OrderItem;

class Order extends Model
{
    use HasFactory;

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function voucher(){

        return $this->belongsTo(Voucher::class);
    }

    public function orderItem(){

        return $this->hasMany(OrderItem::class);
    }
    
}
