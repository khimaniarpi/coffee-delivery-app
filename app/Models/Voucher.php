<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\User;

class Voucher extends Model
{
    use HasFactory;

    public function order(){

        return $this->hasMany(Order::class);
    }

    public function user(){

        return $this->belongsTo(User::class);
    }
}
