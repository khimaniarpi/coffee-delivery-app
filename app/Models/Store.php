<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Menu;

class Store extends Model
{
    use HasFactory;

    protected $fillable = ['store_name', 'store_address', 'store_phone', 'store_email'];

    public function menu(){

        return $this->hasMany(Menu::class);
    }
}
