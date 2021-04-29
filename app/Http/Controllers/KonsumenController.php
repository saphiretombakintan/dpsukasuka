<?php

namespace App\Http\Controllers;
use App\listpinjaman;
use App\tabelpinjaman;
use App\tabelangsuran;
use App\cluster;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KonsumenController extends Controller
{
    public function index(){
        
        $konsumen = DB::table('listpinjamen')->where('status', '=', 'AKTIF')->get();
        $categories = cluster::pluck('cluster','id')->all();
        
        return view("admin.listkonsumen",compact("konsumen"));
    }
    
    public function cari(Request $request){
         $cluster = $request->input('cluster');
         $status = $request->input('status');
        if ($status ==""){
             $konsumen = DB::table('listpinjamen')->where('cluster', '=', $cluster)->get();
        }else{
             $konsumen = DB::table('listpinjamen')->where('cluster', '=', $cluster)->where('status', '=', $status)->get();
        }
       
        
        return view("admin.listkonsumen",compact("konsumen"));
        
        
    }
    
    public function detail($id){
        $konsumen = DB::table('tabelpinjamen')->where('table', '=', $id)->get();
        $nama = tabelpinjaman::find($id);
         return view("admin.detailtable",compact("konsumen","nama"));
        
    }
    
    public function angsuran($id){
        $konsumen = DB::table('tabelangsurans')->where('noph', '=', $id)->get();
        $jumlah = DB::table('tabelangsurans')->where('noph', '=', $id)->sum('tabelangsurans.invoice');
        return view("admin.angsuran",compact('konsumen','jumlah'));
       
        
        
    }
     public function konsumen(){
        $konsumen = listpinjaman::all();
        return view("admin.konsumen",compact('konsumen'));
        
    }
}