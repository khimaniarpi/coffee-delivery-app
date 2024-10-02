<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Repositories\Interfaces\CategoryRepositoryInterface;

class IndexController extends Controller
{
    private $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository){
            $this->categoryRepository = $categoryRepository;
    }

    public function index(){
        $categories = $this->categoryRepository->index();
        return view('index', ['categories' =>$categories]);
    }

}
