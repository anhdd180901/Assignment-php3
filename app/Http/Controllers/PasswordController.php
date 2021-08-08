<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class PasswordController extends Controller
{
    public function getChange(Request $request)
    {
        return view('account.changePassword');
    }

    public function postChange(Request $request)
    {
        // dd($request->all());
        dd(Hash::make($request->password));
        // $user = Auth::user();

        // // $detailUser = User::where('id',$user->id)->first(); // bieet sua thang nao
        // // $request->merge(['password' => Hash::make($request->password)]);
        // // $detailUser->update($request->all());
        // // $detailUser->save();

        // $user->name=$request->input('name');
        // $user->email=$request->input('email');
        // $user->save();

        return Redirect::route('user');
    }
}
