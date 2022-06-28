<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\inventory;
use App\Models\payroll;
use App\Models\show;
use App\Models\User;

class SupervisorpabrikController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __constructor()
    {
        $this->middleware('supervisorpabrik');
    }

    public function index()
    {
        return view('supervisorpabrik.home');
    }

    
    public function view_inv()
    {           //model
        $data=inventory::all();
        $data1=user::all();
        return view('supervisorpabrik.home', compact('data','data1'));
                //  blade       model
    }

    //-----------------------------------------------------------------------
    //PAYROLL
    public function view_jahit()
    {           //model
        $data=payroll::all();
        return view('supervisorpabrik.supervisorpabrik_payroll', compact('data'));
                //  blade       model
    }

    public function supervisorpabrik_payroll1(Request $request)
    {           //model
        $payroll = DB::table("payrolls")->where("ID",$request->input("ID"))->first();
        return view('supervisorpabrik.supervisorpabrik_payroll1', compact('payroll'));
                //  blade       model
    }
    
    public function supervisorpabrik_tambahpenjahit(Request $request)
    {
        DB::table("payrolls")->where("ID",$request->input("ID"))->update([
            "nama_penjahit"=>$request->input("nama_penjahit"),
            "bagian_jahit"=>$request->input("bagian"),
            "jumlah"=>$request->input("jumlah"),
            "harga_per_bagian"=>$request->input("harga"),
            "harga_total"=>$request->input("jumlah")*$request->input("harga"),
            ]);
        
        return redirect('supervisorpabrik_payroll')->with('success', 'Item Updated Successfully!');
    }
    // public function supervisorpabrik_payroll1(Request $request)
    // {           //model
    //     $data = DB::table("payrolls")->where("ID",$request->input("ID"))->first();
    //     //print_r($user);
    //     return view('supervisorpabrik.supervisorpabrik_payroll1', compact('data'));
    //             //  blade       model
    // }
    // public function supervisorpabrik_tambahpenjahit(Request $request)
    // {
    //     $nama_penjahit=$request->input("nama_penjahit");
    //     $bagian_jahit=$request->input("bagian");
    //     $jumlah=$request->input("jumlah");
    //     $harga_per_bagian=$request->input("harga");
    //     $harga_total=$harga_per_bagian*$jumlah;
 
    //     $data=array('nama_penjahit'=>$nama_penjahit,'bagian_jahit'=>$bagian_jahit,'jumlah'=>$jumlah,'harga_per_bagian'=>$harga_per_bagian,'harga_total'=>$harga_total);
        
    //     DB::table('payrolls')->where("ID",$request->input("ID"))->update($data);
        
    //     return redirect('supervisorpabrik_payroll')->with('success', 'Item Updated Successfully!');
    // }

    //TAYLOR
    public function dtpr()
    {
        $nama = DB::table('payrolls')->get();
        $pr = DB::table('payrolls')->where('nama_penjahit', '=', 'Amir Amir')->get();
        return view('supervisorpabrik.supervisorpabrik_detailtaylor',compact('nama', 'pr'));
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

}