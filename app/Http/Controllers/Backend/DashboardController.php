<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\User;
use App\Models\Donation;

class DashboardController extends Controller
{
   public function index(){
    $stocks = Stock::all();
    $doners = User::where('status' , 'doner')->count();
    $donations = Donation::all()->count();
    $approve = Donation::where('status' , 'Approve')->count();
    $reject = Donation::where('status' , 'Reject')->count();
    $pending = Donation::where('status' , 'Pending')->count();
    return view('admin.dashboard' , compact('stocks' , 'doners' , 'donations' , 'approve' , 'reject' , 'pending'));
   }
}
