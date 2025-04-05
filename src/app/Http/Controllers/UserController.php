<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
  {
    return view('admin_registation');
  }
    public function store(Request $request)
  {
     $user = $request->only(['name', 'email', 'password']);
     User::create($user);
     
     return redirect()->route('admin_login');
  }

}
