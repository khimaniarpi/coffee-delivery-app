<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Store;
use App\Repositories\Interfaces\StoreRepositoryInterface;

class StoreController extends Controller
{
    private $storeRepository;

    public function __construct(StoreRepositoryInterface $storeRepository){
        $this->storeRepository = $storeRepository;
    } 

    
    public function index()
    {
        $store = $this->storeRepository->index();
        return view('store.index',['list' => $store]);
       // return response()->json(['list' => $store]);
    }

    
    public function create()
    {
        return view('store.create');
    }

    
    public function store(Request $request)
    {        
        // dd($request);
        // $request->validate([
        //     'store_name' => ['required','string','max:255'],
        //     'store_address' => ['required','string','max:500'],
        //     'store_phone' => ['required','string','max:11'],
        //     'store_email' => ['required','lowercase', 'email','string','unique:'.Store::class],
        // ]);

        $this->storeRepository->store($request);
        return redirect()->route('store.index');
    }

    
    public function show(string $id)
    {
        $store = Store::where('id', $id)->get();
         
        return view('store.show', ['data' => $store]);
    }

    
    public function edit(string $id)
    {
        $store = $this->storeRepository->edit($id);
        return view('store.update', ['data' => $store]);
    }


    
    public function update(Request $request, string $id)
    {
        $this->storeRepository->update($request,$id);
        return redirect()->route('store.index');
    }

    
    public function destroy(string $id)
    {
        $this->storeRepository->destroy($id);
        return redirect()->route('store.index');
    }
}
