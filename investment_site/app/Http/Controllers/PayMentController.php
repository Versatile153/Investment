<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Deposit;
use App\Models\Profile;
use App\Models\Security;
use Illuminate\Http\Request;

class PayMentController extends Controller
{
    public function store(){
        return 1234;
    }
    public function withdraw(){
        return view('withdrawals.withdraw');
    }

    public function view(){
        return view('withdrawals.view');
    }

    public function deposit(){
        return view('deposit.depo');
    }

    
    public function new_deposit(){
        return view('deposit.new_deposit');
    }




    public function plan(Request $request){
        Deposit::create($request->all());
        
        return redirect('/new_deposit');
    }

    public function set_up(Request $request){
    
        Account::create($request->all());
        
        return redirect('/deposit');
    }

    public function profile(Request $request){
        
        Profile::create($request->all());
        // return 'created';
        return view('/home');
    }

    public function security(Request $request){
        
      Security::create($request->all());
        return 'created';
        return view('/home');
    }

    public function money_withdrawal(){
        return 12321;
    }








}
