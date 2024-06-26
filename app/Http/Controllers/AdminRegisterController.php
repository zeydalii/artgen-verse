<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminRegisterController extends Controller
{
    public function index() 
    {
        return view('admin.pages.register');
    }

    public function store(Request $request)
    {
        // dd($request);
        // try {
            $validatedData = $request->validate([
                'username' => 'required|min:3|max:255|unique:users',
                'nama_lengkap' => 'required|max:255',
                'password' => 'required|min:3|max:255',
            ]);
    
            $validatedData['password'] = Hash::make($validatedData['password']);
    
            $user = new User();
            $user->username = $validatedData['username'];
            $user->nama_lengkap = $validatedData['nama_lengkap'];
            $user->password = $validatedData['password'];
            $user->first_test = 0;
            $user->last_test = 0;
            $user->role = "Admin";
    
            $user->save();
    
            return redirect('/admin/register')->with('registerSuccess', 'Data admin berhasil dibuat!');
        // } catch (\Exception $e) {
        //     DB::rollback();
        //     dd($e->getMessage());
        //     return redirect()->back();
        // }
    }
}
