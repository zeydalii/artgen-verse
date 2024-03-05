<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = User::where('role', 'User');

        if ($search) {
            $query->where(function ($query) use ($search) {
                $query->where('username', 'LIKE', '%' . $search . '%')
                    ->orWhere('nama_lengkap', 'LIKE', '%' . $search . '%');
            });
        }

        $users = $query->paginate(10);

        return view('admin.pages.users', compact('users', 'search'));
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
            $user->role = "User";
    
            $user->save();
    
            return redirect('/admin/users')->with('storeSuccess', 'Data user berhasil dibuat!');
        // } catch (\Exception $e) {
        //     DB::rollback();
        //     dd($e->getMessage());
        //     return redirect()->back();
        // }
        
    }

    public function update(Request $request, $id)
    {
        // dd($request);
        // try {
            $user = User::findOrFail($id);

            $rules = [
                'nama_lengkap' => 'required|max:255',
            ];

            if ($request->username != $user->username) {
                $rules['username'] = 'required|min:3|max:255|unique:users';
            }

            if (!empty($request->password)) {
                $rules['password'] = 'required|min:3|max:255';
            }

            $validatedData = $request->validate($rules);

            $user->nama_lengkap = $validatedData['nama_lengkap'];
            $user->role = "User";

            $user->username = $validatedData['username'] ?? $user->username;
            if (!empty($request->password)) {
                $user->password = Hash::make($validatedData['password']);
            }
    
            $user->save();
    
            return redirect('/admin/users')->with('updateSuccess', 'Data user berhasil diperbarui!');
        // } catch (\Exception $e) {
        //     DB::rollback();
        //     dd($e->getMessage());
        //     return redirect()->back();
        // }
        
    }

    public function destroy($id)
    {
        // dd($id);
        // try {
            $user = User::findOrFail($id);

            $user->delete();
    
            return redirect('/admin/users')->with('deleteSuccess', 'Data user berhasil dihapus!');
        // } catch (\Exception $e) {
        //     DB::rollback();
        //     dd($e->getMessage());
        //     return redirect()->back();
        // }
        
    }
}
