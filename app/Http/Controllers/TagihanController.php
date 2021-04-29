<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tagihan;
use App\tabel;
use App\tagihanangsuran;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class TagihanController extends Controller
{
    public function index(){
        
        return view("prosess.tabeltagihan");
    }
    
    public function addtagihan(Request $request,$id){
        $prevCart = $request->session()->get('cart');
        $cart = new tabel($prevCart);
        
        $product = tagihan::find($id);
        $cart->addItem($id,$product);
        $request->session()->put('cart', $cart);
        
       return redirect()->route("tabeltagihan");
        
        
    }
    
    public function showtabel(){
        
        $cart = Session::get('cart');
        //cart is not empty
        if($cart){
            return view('prosess.tabeltagihan',['cartItems'=> $cart]);
//        
         //cart is empty
        }else{
            return redirect()->route("tagihan");
//            echo "cart Kosong Bro";
        }
        
    }
    
    public function store(Request $request)
    {
          $bulan = $request->input('bulan');
          $tahun = $request->input('tahun');
          $date = $request->input('fixture_date');
       
            $tagihan = tagihan::all();
        
        foreach($tagihan as $row)
        {
           $data = array('tahun' => $tahun, 'bulan' => $bulan, 'cluster' => $row->cluster, 'blok' => $row->blok, 'namakonsumen' => $row->namakonsumen, 'angsuran' => $row->angsuran, 'tenor' => $row->tenor);
            tagihanangsuran::insert($data);    
        }
         return redirect()->route("tabledit");
        
        
        
//         print_r($bulan);
//         print_r($tahun);
//         print_r($date);
//        

    }
}
