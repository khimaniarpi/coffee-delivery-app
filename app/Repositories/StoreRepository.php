<?php
namespace App\Repositories;

use App\Repositories\Interfaces\StoreRepositoryInterface;
use Illuminate\Support\Facades\DB;
use App\Models\Store;

class  StoreRepository implements StoreRepositoryInterface{

    public function index(){
        return DB::table('stores')->get();
    }

    public function store($request){

       Store::create([
                    'store_name' => $request->storename,
                    'store_email' => $request->storeemail,
                    'store_address' => $request->storeaddress,
                    'store_phone' => $request->storephone,
       ]);
    
    }

    public function edit($id){
        return DB::table('stores')->find($id);
    }

    public function update($request,$id){
        Store::where('id', $id)
            ->update([
                    'store_name' => $request->storename,
                    'store_email' => $request->storeemail,
                    'store_address' => $request->storeaddress,
                    'store_phone' => $request->storephone,
            ]);
    }

    public function destroy($id){
        DB::table('stores')
            ->where('id',$id)
            ->delete();
    }
}