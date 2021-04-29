<?php

namespace App\Http\Controllers;
use App\tagihanangsurans;
use App\tabelpinjaman;
use App\tabelangsuran;
use App\cluster;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;


class TableController extends Controller
{
    function index()
    {
        $data = DB::table('tagihanangsurans')->get();
        return view('prosess.dumy', compact('data'));
    }
    
    function action(Request $request)
    {
        if($request->ajax())
        {
            if($request->action =='edit')
            {
                $data = array(
                    'cluster'       => $request->cluster,
                    'namakonsumen'  => $request->namakonsumen,
                    'angsuran'      => $request->angsuran,
                    'tenor'         => $request->tenor
                );
                DB::table('tagihanangsurans')
                    ->where('id', $request->id)
                    ->update($data);
            }
            if($request->action == 'delete')
            {
                DB::table('tagihanangsurans')
                    ->where('id', $request->id)
                    ->delete();
             }
            return response()->json($request);
        }
    }
}
