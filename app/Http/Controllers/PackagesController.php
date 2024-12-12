<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Draws;
use App\Models\Tickets_Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PackagesController extends Controller
{
    //

    public function index($id)
    {
        return view('/seat')->with('id', $id);
    }

    public function payment(Request $request, $id)
    {
        $user = Auth::user()->id;

        $formfield = $request->validate([
            'name_on_card' => 'required|string',
            'card_number' => 'required|string',
            'expiration_date' => 'required|date',
            'cvv' => 'required|string'
        ]);

        if (!$formfield) {
            return response()->json('error 400');
        }

        $card = Card::get()->where('account_id', $user)->first();

        if ($formfield['name_on_card'] == $card->name_on_card && $formfield['card_number'] == $card->card_number && $formfield['expiration_date'] == $card->expiration_date && $formfield['cvv'] == $card->cvv) {
            $draw = Draws::get()->where('account_id', $user)->where('package_id', $id)->first();
            $draw->update(['status' => '2']);

            $ticket = Tickets_Detail::get()->where('package_id', $id)->first();
            $count = $ticket->quota - 1;
            $ticket->update(['quota' => $count]);

            return redirect()->route('win')->with('success', 'Payment successful');
        } else {
            return redirect()->route('seat', $id)->with('error', 'Invalid card details');
        }
    }
}
