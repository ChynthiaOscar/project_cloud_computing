<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Draws;
use App\Models\Account;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $data['password'] = bcrypt($data['password']);

        $account = Account::create($data);
        return redirect()->route('about_me', $account->id)->with('success', 'Account created successfully');
    }

    public function login(Request $request)
    {
        $formfield = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!$formfield) {
            return response()->json('error 400');
        }

        if (Auth::guard('account')->attempt($formfield)) {
            $request->session()->regenerate();
            $user = Auth::guard('account')->user();
            
            $date_announcement = Schedule::select('date')->where('name', "Last chance to enter the draw")->first();

            if (Draws::where('account_id', $user->id)->where('status', 1)->exists() && $date_announcement['date'] < Carbon::now()->format('Y-m-d')) {
                return redirect()->route('win');
            } else if (Draws::where('account_id', $user->id)->exists() && $date_announcement['date'] < Carbon::now()) {
                return redirect()->route('lose');
            } else {
                return redirect()->route('data');
            }
        }
        return redirect()->route('login')->with('error', 'Invalid email or password');
    }

    public function about($id)
    {
        $account = Account::find($id);
        return view('about_me')->with('account', $account);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $formfield = Validator::make($data, [
            'first_name' => 'required|string',
            'surname' => 'required|string',
            'date_of_birth' => 'required|date',
            'country_of_residence' => 'required|string',
            'postcode' => 'required|string'
        ]);

        if ($formfield->fails()) {
            return response()->json($formfield->errors(), 400);
        }

        $account = Account::find($id);

        $account->update([
            'first_name' => $data['first_name'],
            'surname' => $data['surname'],
            'date_of_birth' => $data['date_of_birth'],
            'country_of_residence' => $data['country_of_residence'],
            'postcode' => $data['postcode']
        ]);
        return redirect()->route('login')->with('success', 'Account updated successfully');
    }
}
