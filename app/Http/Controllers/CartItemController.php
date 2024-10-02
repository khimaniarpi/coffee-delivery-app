<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CartItem;
use App\Repositories\Interfaces\CartRepositoryInterface;

class CartItemController extends Controller
{
    private $cartRepository;

        public function __construct(CartRepositoryInterface $cartRepository){
        $this->cartRepository = $cartRepository;
    } 
    
    public function index(){
        $cart = $this->cartRepository->index();
        return view('cart.index',['cartitem' => $cart ]);
    }

    public function store(Request $request){
        $this->cartRepository->store($request);
        return redirect()->route('cart.index');
    }

    public function update(request $request, string $id){
        $this->cartRepository->update($request,$id);
        return redirect()->route('cart.index'); 
    }

    public function destroy(string $id){
        $this->cartRepository->destroy($id);
        return redirect()->route('cart.index');
    }
}
