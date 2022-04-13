<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\inventory;
use App\Models\payroll;
use App\Models\show;
use App\Models\User;

class TestController extends Controller
{
    public function test()
    {
        //$data=[];
        //echo "aaa";
        $table=DB::table('inventories')->get();
        $data["table"]=$table;
        //print_r($table);
        return view('manufaktur',$data);
    }
    
    public function test1()
    {
        $table=DB::table('inventories')->get();
        $data["table"]=$table;
        return view('inventory',$data);
    }

    public function simpanproduk(Request $request)
    {
        $supplier=$request->input("supplier");
        $kategori=$request->input("kategori");
        $nama=$request->input("nama");

        $panjang=$request->input("panjang");
        $berat=$request->input("berat");

        $iv=DB::table('inventories')->where("nama_supplier",$supplier)->where("kategori_produk",$kategori)->where("nama_produk",$nama)->where("panjang_produk",$panjang)->where("berat_produk",$berat)->first();
        if ($iv==null)
        {
            echo "<br/>";
            echo "Item tidak ditemukan";
            echo "<br/>";
        }
        else 
        {
            DB::table('inventories')->where('ID',$iv->ID)->delete();
            
            echo "<br/>";
            echo "<br/> Item berhasil dihapus";
            echo "<br/>";
        }
        return redirect('manufaktur')->with('success', 'Item Removed Successfully!');
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
        return redirect('inventory')->with('success', 'Item Updated Successfully!');
    }

    public function tambahpenjahit(Request $request)
    {
        $payroll= new payroll;
        $payroll->bulan=$request->bulan;
        $payroll->nama_penjahit=$request->nama_penjahit;
        $payroll->bagian_jahit=$request->bagian;
        $payroll->jumlah=$request->jumlah;
        $payroll->harga_per_bagian=$request->harga;
        $payroll->harga_total=$request->harga*$request->jumlah;
        $payroll->save();
        return redirect('payroll')->with('success', 'Data Updated Successfully!');
    }
    
    public function cekpenjahit(Request $request)
    {
        $nama = DB::table('payrolls')->get(); 

        $nama_penjahit=$request->input("nama_jahit");

        $pr=DB::table('payrolls')->where("nama_penjahit",'=',$nama_penjahit)->get();
        // if ($pr==null)
        // {
        //     echo "<br/>";
        //     echo "Data tidak ditemukan";
        //     echo "<br/>";
        // }
        // else 
        // {   
            // $jumlah=0;
            // foreach ($pr as $prr){
            //     $jumlah+=$pr->harga_total;
            // }
            // DB::table('payrolls')->where('ID',$pr->ID)->view();
            
            // echo "<br/>";
            // echo "<br/> Item berhasil dihapus";
            // echo "<br/>";
        //}
        return redirect('detailtaylor',compact('pr','nama'));

        // $nama_penjahit=$request->input("nama_penjahit");

        // $pr=DB::table('payrolls')->where("nama_penjahit",$nama_penjahit)->first();
        // if ($pr==null)
        // {
        //     echo "<br/>";
        //     echo "Data tidak ditemukan";
        //     echo "<br/>";
        // }
        // else 
        // {
        //     DB::table('payrolls')->where('ID',$pr->ID)->view();
            
        //     echo "<br/>";
        //     echo "<br/> Item berhasil dihapus";
        //     echo "<br/>";
        // }
        // return redirect('manufaktur')->with('success', 'Item Removed Successfully!');
    }
    public function dtpr(){
        $nama = DB::table('payrolls')->get(); 
        $pr = DB::table('payrolls')->where('nama_penjahit', '=', 'Amir Amir')->get(); 
        return view('detailtaylor',compact('nama', 'pr'));
    }
    public function view_inv()
    {           //model
        $data=inventory::all();
        return view('home', compact('data'));
                //  blade       model
    }
    
    public function view_invv()
    {           //model
        $data=inventory::all();
        return view('inventory1', compact('data'));
                //  blade       model
    }

    public function view_jahit()
    {           //model
        $data=payroll::all();
        return view('payroll', compact('data'));
                //  blade       model
    }

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
        return redirect('/home');

        // user::create([
        //     'first_name'    => 'Eric',
        //     'last_name'     => 'Pranoto',
        //     'no_HP'         => '081234567890',
        //     'email'         => 'eric@gmail.com',
        //     'password'      =>  password_hash('password'),
        //     'role'          => 'superadmin'
        // ]);
    }
}
