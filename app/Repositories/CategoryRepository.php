<?php
namespace App\Repositories;

use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Models\Category;

class  CategoryRepository implements CategoryRepositoryInterface{

    public function index(){ 
        return Category::all(); 
    }
}