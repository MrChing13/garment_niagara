<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\inventory;
use App\Models\payroll;
use App\Models\show;
use App\Models\User;

class TukangpotongController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __constructor()
    {
        $this->middleware('tukangpotong');
    }
    

    //---
    
    public function index()
    {
        return view('tukangpotong.home');
    }

    public function view_inv()
    {           //model
        $data=inventory::all();
        $data1=user::all();
        return view('tukangpotong.home', compact('data','data1'));
                //  blade       model
    }

    
    //-----------------------------------------------------------------------
    //MANUFAKTUR
    
    public function test()
    {
        $table=DB::table('inventories')->get();
        $data["table"]=$table;
        return view('tukangpotong.tukangpotong_manufaktur',$data);
    }

    public function tukangpotong_simpanproduk(Request $request)
    {
        $supplier=$request->input("supplier");
        $kategori=$request->input("kategori");
        $nama=$request->input("nama");

        $panjang=$request->input("panjang");
        $berat=$request->input("berat");

        $iv=DB::table('inventories')->where("nama_supplier",$supplier)->where("kategori_produk",$kategori)->where("nama_produk",$nama)->where("panjang_produk",$panjang)->where("berat_produk",$berat)->first();
        if ($iv==null)
        {

            return redirect('tukangpotong_manufaktur')->with('success', 'Unsuccessful, Unmatched Data!');
        }
        else
        { 
            $payroll= new payroll;
            $payroll->nama_supplier=$request->supplier;
            $payroll->kategori_produk=$request->kategori;
            $payroll->nama_produk=$request->nama;
            $payroll->panjang_produk=$request->panjang;
            $payroll->berat_produk=$request->berat;
            $payroll->nama_penjahit='-';
            $payroll->bagian_jahit='-';
            $payroll->jumlah='0';
            $payroll->harga_per_bagian='0';
            $payroll->harga_total='0';
            $payroll->save();

            DB::table('inventories')->where('ID',$iv->ID)->delete();

            return redirect('tukangpotong_manufaktur')->with('success', 'Item Moved to Sewing Stocks Successfully!');
        }

    }
}