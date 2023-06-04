<?php
// UserController
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showMyPage(Request $request)
    {
        $user = $request->user();
        return view('mypage', compact('user'));
    }
    
    public function createOrder(Request $request)
    {
        $user = $request->user();
        
        $order = new Order();
        $order->product_name = $request->input('product_name');
        $order->quantity = $request->input('quantity');
        $user->orders()->save($order);
        
        return redirect('/mypage');
    }
}