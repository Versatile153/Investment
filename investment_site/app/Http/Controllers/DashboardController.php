<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function help(){
        return view('dashboard.help');

    }

    public function earn(){
        return view('dashboard.earn');
        
    }

    public function ref(){
        return view('dashboard.referal');
        
    }

    public function withdraw(){
        return view('dashboard.withdraw');
        
    }

    
    public function view(){
        return view('dashboard.withdraw_view');
        
    }
    public function dash(){
        return view('dashboard.dash');
        
    }
    public function deposit(){
        return view('dashboard.deposit');
        
    }
    
    public function view_deposit(){
        return view('dashboard.view_deposit');
        
    }
    
    public function set_up(){
        return view('dashboard.setup_payment');
        
    }

    public function profile(){
        return view('dashboard.profile');
        
    }
    public function payment_account(){
        return view('dashboard.payment_account');
        
    }
    public function security(){

       
        return view('dashboard.security');
        
    }
}
