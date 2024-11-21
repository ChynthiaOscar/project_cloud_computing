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

        Account::create($data);
        return redirect()->route('login');
    }
}
