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
        $id = $request->id;
        $detailUser = User::where('id', $id)->first();
        return view('account.changePassword', ['detail' => $detailUser]);
    }

    public function postChange(Request $request)
    {
        $id = $request->id;
        $detailUser = User::where('id',$id)->first();
        $request->merge(['password' => Hash::make($request->password)]);
        $detailUser->update($request->all());
        $detailUser->save();
        return redirect(route('user.getInfo', ['id'=>Auth::user()->id], ['detail' => $detailUser]));
    }
}
