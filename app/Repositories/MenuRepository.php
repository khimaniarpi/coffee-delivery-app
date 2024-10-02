<?php
namespace App\Repositories;

use App\Repositories\Interfaces\MenuRepositoryInterface;
use App\Models\Menu;

class  MenuRepository implements MenuRepositoryInterface{

    public function index(){
        return Menu::with('category')->get();
    }

    public function store($request){
        Menu::create([
                    'store_name' => $request->storename,
                    'store_email' => $request->storeemail,
                    'store_address' => $request->storeaddress,
                    'store_phone' => $request->storephone,
       ]);
    }

    public function show($id){
       return Menu::Where('id', $id)->get(); 
    }

    public function order($id){
        
        return Menu::Where('category_id', $id)->with('category')->get();
    }
}