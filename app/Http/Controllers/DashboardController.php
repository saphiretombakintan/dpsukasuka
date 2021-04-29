<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\invoicelog;
use App\masterpinjaman;
use App\listpinjaman;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $invoice = DB::table('invoicelogs')->where('invoice_month', "February")->get();
        $invoice2 = DB::table('invoicelogs')->where('invoice_month', "January")->get();
        $bougen = DB::table('masterpinjaman')->where('cluster', "BOUGENVILE")->count();
        $emerald = DB::table('masterpinjaman')->where('cluster', "EMERALD")->count();
        $green = DB::table('masterpinjaman')->where('cluster', "GREEN APPLE")->count();
        $sapphire = DB::table('listpinjamen')->where('cluster', "SAPHIRE" and 'status', "AKTIF")->count();
       
        $list = DB::table('listpinjamen')->where('status',"NONAKTIF")->get();
        
        return view("admin.dashboard",compact("invoice","invoice2","bougen","emerald","green",
        "sapphire","list"));
    }
}
