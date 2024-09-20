<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Store;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $store = DB::table('stores')->get();
        return view('store.index',['list' => $store]);
        //return view('store.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('store.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $store = DB::table('stores')
                    ->insert(
                        [
                            'store_name' => $request->storename,
                            'store_email' => $request->storeemail,
                            'store_address' => $request->storeaddress,
                            'store_phone' => $request->storephone,
                        ]
                        );

        return redirect()->route('store.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $store = Store::where('id',$id)->get();
         
        return view('store.show', ['data' => $store]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)//updatepage
    {
        $store = DB::table('stores')->find($id);
            //return $store;
        return view('store.update', ['data' => $store]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)//updateuser
    {
        $store = DB::table('stores')
                    ->where('id', $id)
                    ->update([
                            'store_name' => $request->storename,
                            'store_email' => $request->storeemail,
                            'store_address' => $request->storeaddress,
                            'store_phone' => $request->storephone,
                    ]);
        return redirect()->route('store.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $store = DB::table('stores')
                    ->where('id',$id)
                    ->delete();

        return redirect()->route('store.index');
    }
}
