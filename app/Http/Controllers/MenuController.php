<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Category;
use App\Repositories\Interfaces\MenuRepositoryInterface;

class MenuController extends Controller
{
    private $menuRepository;

    public function __construct(MenuRepositoryInterface $menuRepository){
            $this->menuRepository = $menuRepository;
    }

    // public function index(){
    //    $menu = $this->menuRepository->index();
    //     return view('menu.index',['menu'=>$menu,'category_name'=>$menu[0]->category->category_name]);
    // }

    public function show(string $id){
        $menu = $this->menuRepository->show();

        return view('menu.detail', ['item' => $menu]);
    }

    public function order(string $id = null){
        if($id==null){
            $menu = $this->menuRepository->index();
        }
        else{
            
            $menu = $this->menuRepository->order($id);
        }
        
        return view('menu.index',['menu'=>$menu,'category_name'=>$menu[0]->category->category_name]);
        
    }
}
