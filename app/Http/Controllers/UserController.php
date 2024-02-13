<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function user() 
    {
        $data['users'] = User::get();
        return view('user.user')->with($data);
    }
    public function store(StoreUserRequest $request)
    {
        User::create($request->all());
        return redirect('user')->with('success','Data user Berhasil Ditambahkan.');
    }
    public function update(UpdateUserRequest $request, $id)
    {
        User::find($id)->update($request->all());
        return redirect('user')->with('success', 'Update data user berhasil');
    }
    public function destroy(User $user, $id)
    {
        $user->where('id',$id)->delete();
        return redirect('user')->with('success','Delete data user berhasil');
    }
}
