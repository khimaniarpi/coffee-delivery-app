<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Store;
use App\Models\Category;
use App\Models\OrderItem;

class Menu extends Model
{
    use HasFactory;

    public function store(){

        return $this->belongsTo(Store::class);
    }

    public function category(){

        return $this->belongsTo(Category::class);
    }

    public function orderItem(){

        return $this->hasMany(OrderItem::class);
    }
}
