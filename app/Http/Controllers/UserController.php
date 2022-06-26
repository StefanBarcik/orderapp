<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function show() {
        if (Auth::check()) {
            $id = Auth::id();
        } else {
            return view('/');
        }
        $user = User::all()->where('id', $id)->first();
        $orders = Order::all()->where('user_id', $id);

        return view('user.profile')
            ->with('user', $user)
            ->with('orders', $orders);
    }

    public function delete($id, Request $request) {
        $password = $request->input('password');

        $user = User::all()->where('id', $id)->first();
        $orders = Order::all()->where('user_id', $id);

        if (Hash::check($password, $user->password)) {
            User::destroy($id);
        } else {
            $message = 'Entered password was wrong';
            return view('user.profile', compact('message'))
                ->with('user', $user)
                ->with('orders', $orders);
        }

       return redirect('/');
    }

}
