<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use App\Models\Enrol;
use App\Models\Fee;
use App\Models\Payment;
use App\Models\Transaction;
use App\Models\User;

class PaymentController extends Controller
{
    public function index()
    {
        $fees = Fee::withCount(['payments' => fn ($query) => $query->paid()])
            ->get()->keyBy('id');

//        $user = User::query()->join('payments','payments.user_id','=','users.id')
//            ->join('transactions','transactions.id','=', 'payments.transaction_id')
//            ->whereHas('payments', fn($q)=> $q->paid() )->count();



        //2225


        $discountedScn = Discount::all('scn');

        $discounted_sum = User::query()->join('payments','payments.user_id','=','users.id')
            ->join('transactions','transactions.id','=', 'payments.transaction_id')
            ->whereHas('payments', fn($q)=> $q->paid() )
            ->whereIn('enrol_id',(Enrol::whereIn('scn', $discountedScn)->pluck('id')))


            ->sum('amount');

        return view('users.payments.index', compact(['fees', 'discounted_sum']));
    }


    public function show(User $user)
    {
        $fee = Fee::forUser($user)->first();

        return view('users.payments.show', compact(['user', 'fee']));
    }
}
