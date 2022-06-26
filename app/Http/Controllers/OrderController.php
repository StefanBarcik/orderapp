<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function showStep1() {
        return view('order.step1');
    }

    public function showStep2(Request $request) {

        $order = array(
            'product' => $request->input('product'),
            'user_id' => Auth::id(),
            'price' => $request->input('price'),
            'date' => $request->input('date')
        );

        Session::put('product', $request->input('product'));
        Session::put('price', $request->input('price'));
        Session::put('date', $request->input('date'));

        return view('order.step2', [
            'order' => $order
        ]);
    }

    public function step2(Request $request) {
        Order::create([
            'product' => Session::get('product'),
            'user_id' => Auth::id(),
            'price' => (double)Session::get('price'),
            'date' => Session::get('date')
        ]);
        return redirect('/');
    }

    public function cancel(Request $request) {
        $id = $request->input('orderID');

        Order::destroy($id);

        return redirect('/profile');
    }
}
