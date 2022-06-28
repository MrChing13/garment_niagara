<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\inventory;
use App\Models\payroll;
use App\Models\show;
use App\Models\User;

class SuperadminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __constructor()
    {
        $this->middleware('superadmin');
    }

    //------------------------------------------------------------------
    //HOME
    public function index()
    {
        return view('superadmin.home');
    }
    
    public function view_inv()
    {           //model
        $data=inventory::all();
        $data1=user::all();
        return view('superadmin.home', compact('data','data1'));
                //  blade       model
    }
    
    //-----------------------------------------------------------------------
    //INVENTORY
    public function view_invv()
    {           //model
        $data=inventory::all();
        return view('superadmin.superadmin_inventory1', compact('data'));
                //  blade       model
    }

    public function test1()
    {
        $table=DB::table('inventories')->get();
        $data["table"]=$table;
        return view('superadmin.superadmin_inventory',$data);
    }

    public function tambahproduk(Request $request)
    {
        $inventory= new inventory;
        $inventory->nama_supplier=$request->supplier;
        $inventory->kategori_produk=$request->kategori;
        $inventory->nama_produk=$request->nama;
        $inventory->panjang_produk=$request->panjang;
        $inventory->berat_produk=$request->berat;
        $inventory->save();
        return redirect('superadmin_inventory1')->with('success', 'Item Updated Successfully!');
    }

    
    //-----------------------------------------------------------------------
    //MANUFAKTUR
    public function test()
    {
        $table=DB::table('inventories')->get();
        $data["table"]=$table;
        return view('superadmin.superadmin_manufaktur',$data);
    }

    public function superadmin_simpanproduk(Request $request)
    {
        $supplier=$request->input("supplier");
        $kategori=$request->input("kategori");
        $nama=$request->input("nama");

        $panjang=$request->input("panjang");
        $berat=$request->input("berat");

        $iv=DB::table('inventories')->where("nama_supplier",$supplier)->where("kategori_produk",$kategori)->where("nama_produk",$nama)->where("panjang_produk",$panjang)->where("berat_produk",$berat)->first();
        if ($iv==null)
        {

            return redirect('superadmin_manufaktur')->with('success', 'Unsuccessful, Unmatched Data!');
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

            return redirect('superadmin_manufaktur')->with('success', 'Item Moved to Sewing Stocks Successfully!');
        }

    }

    //-----------------------------------------------------------------------
    //PAYROLL
    public function view_jahit()
    {           //model
        $data=payroll::all();
        return view('superadmin.superadmin_payroll', compact('data'));
                //  blade       model
    }

    public function superadmin_payroll1(Request $request)
    {           //model
        $payroll = DB::table("payrolls")->where("ID",$request->input("ID"))->first();
        return view('superadmin.superadmin_payroll1', compact('payroll'));
                //  blade       model
    }

    public function superadmin_tambahpenjahit(Request $request)
    {
        DB::table("payrolls")->where("ID",$request->input("ID"))->update([
            "nama_penjahit"=>$request->input("nama_penjahit"),
            "bagian_jahit"=>$request->input("bagian"),
            "jumlah"=>$request->input("jumlah"),
            "harga_per_bagian"=>$request->input("harga"),
            "harga_total"=>$request->input("jumlah")*$request->input("harga"),
            ]);
        
        return redirect('superadmin_payroll')->with('success', 'Item Updated Successfully!');
    }

    //TAYLOR
    public function dtpr()
    {
        $nama = DB::table('payrolls')->get();
        $pr = DB::table('payrolls')->where('nama_penjahit', '=', 'Amir Amir')->get();
        return view('superadmin.superadmin_detailtaylor',compact('nama', 'pr'));
    }

    public function cekpenjahit(Request $request)
    {
        $nama = DB::table('payrolls')->get();

        $nama_penjahit=$request->input("nama_penjahit");
        $pr=DB::table('payrolls')->where("nama_penjahit",'=',$nama_penjahit)->get();
        $total=0;
        for ($i=0;$i<count($pr);$i++)
        {
            $total=$total+$pr[$i]->harga_total;
        }
        $data["total"]=$total;
        echo json_encode($data);
    }

    //ADDUSER
    public function adduser(Request $request)
    {
        $user= new user;
        $user->first_name=$request->first_name;
        $user->last_name=$request->last_name;
        $user->no_hp=$request->no_hp;
        $user->email=$request->email;
        $user->password=Hash::make($request['password']);
        $user->role=$request->role;
        $user->save();
        return redirect('superadmin')->with('success', 'User Added Succesfully!');;
    }

    //ACCOUNTING
    public function view_users()
    {           //model
        $data2=user::all();
        return view('superadmin.superadmin_accounting', compact('data2'));
                //  blade       model
    }

    public function superadmin_updateuser(Request $request)
    {           //model

        $user=DB::table("users")->where("id",$request->input("id"))->first();
        //print_r($user);
        return view('superadmin.superadmin_updateuser', compact('user'));
                //  blade       model
    }

    public function superadmin_deleteuser(Request $request)
    {           //model

        DB::table("users")->where("id",$request->input("id"))->delete();
        //print_r($user);
        //return view('updateuser', compact('user'));
        return redirect('superadmin_accounting')->with('success', 'Item Deleted Successfully!');;
                //  blade       model
    }

    public function superadmin_simpanuser(Request $request)
    {           //model

        DB::table("users")->where("id",$request->input("id"))->update(["salary"=>$request->input("salary")]);
        //print_r($user);
        //return view('updateuser', compact('user'));
                //  blade       model
        return redirect('superadmin_accounting')->with('success', 'Item Updated Successfully!');
    }
}