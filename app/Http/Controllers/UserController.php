<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function createUser()
    {
        // Tạo người dùng mới
        $user = User::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => bcrypt('123456') // Bảo mật mật khẩu
        ]);

        return response()->json([
            'message' => 'User created successfully!',
            'user' => $user
        ]);
    }
}
