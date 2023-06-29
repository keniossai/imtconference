<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class NbaDashboardController extends Controller
{
    public function index(Request $request)
    {
        $users                   = User::thisYear()->simplePaginate();
        $users_count             = User::whereHas('payments', fn($q)=> $q->paid())->count();
        $transactions_count      = Transaction::has('payments')->count();
        $transactions_sum_amount = Transaction::has('payments')->paid()->sum('amount');


        return view('dashboard.nba.index', compact(['users', 'users_count', 'transactions_count', 'transactions_sum_amount']));
    }
}
