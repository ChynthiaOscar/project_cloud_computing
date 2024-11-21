<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{
    // Create a new account
    public function create(Request $request)
    {
        $data = $request->all();
        $formfield = Validator::make($data, [
            'name' => 'required|string',
            'email' => 'required|email|unique:accounts',
            'password' => 'required|string'
        ]);

        if ($formfield->fails()) {
            return response()->json($formfield->errors(), 400);
        }

        $data['password'] = bcrypt($data['password']);

        Account::create($data);
        return redirect()->route('login')->with('success', 'Account created successfully');
    }

    public function login(Request $request)
    {
        $data = $request->all();

        $formfield = Validator::make($data, [
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        if ($formfield->fails()) {
            return response()->json($formfield->errors(), 400);
        }

        $account = Account::where('email', $data['email'])->first();
        if (!$account || $data['email'] != $account->email || !password_verify($data['password'], $account->password)) {
            return redirect()->route('login')->with('error', 'Invalid email or password');
        } else {
            return redirect()->route('data');
        }
    }
}
