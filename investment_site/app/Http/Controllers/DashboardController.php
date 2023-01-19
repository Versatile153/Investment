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
}
