<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function getList()
    {
        $user = User::get();
        return view('admin.users.userList', ['users' => $user]);
    }
    public function getAdd()
    {
        $user = User::all();
        return view('admin.users.userAdd', ['users' => $user]);
    }
    public function postAdd(Request $request)
    {
        //mã hóa password khi nhập vào
        $request->merge(['password' => Hash::make($request->password)]);
        $user = User::create($request->all());
        $user->save();
        return redirect(route('user.getList'));
    }
    public function getEdit(Request $request)
    {
        //lấy id
        $id = $request->id;
        //lấy dữ liệu vào trong biến detailUser với điều kiện id
        $detailUser = User::where('id', $id)->first();
        //  dump($detailUser);
        return view('admin.users.userEdit', ['detail' => $detailUser]);
    }
    public function postEdit(Request $request)
    {
        //lấy id
        $id = $request->id;
        $detailUser = User::where('id',$id)->first();
        $request->merge(['password' => Hash::make($request->password)]);
        $detailUser->update($request->all());
        $detailUser->save();
        return redirect(route('user.getList'));
    }
    public function getDelete(Request $request)
    {
        $id = $request->id;
        $detailUser = User::where('id',$id)->first();
        $detailUser->delete();
        return redirect(route('user.getList'));
    }
}
