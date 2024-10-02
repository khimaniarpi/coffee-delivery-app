<?php
namespace App\Repositories;

use App\Repositories\Interfaces\CartRepositoryInterface;
use Illuminate\Support\Facades\DB;
use App\Models\CartItem;

class  CartRepository implements CartRepositoryInterface{

    public function index(){
        return DB::table('cart_items')->get();
    }

    public function store($request){
             CartItem::create([
                    
             ]);
             
    }

    public function update($request,$id){
        $updated = DB::table('cart_items')
            ->where('user_id', $request->input('user_id'))
            ->where('item_id', $request->input('item_id'))
            ->update(['quantity' => $request->input('quantity'), 'updated_at' => now()]);
    }
    

    public function destroy( $id){
        CartItem::where('id', $id)
                ->delete();
    }    

}    