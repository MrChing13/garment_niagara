<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\inventory;
use App\Models\payroll;
use App\Models\show;
use App\Models\User;

class AccountingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    //------------------------------------------------------------------
    //HOME

    public function __constructor()
    {
        $this->middleware('accounting');
    }

    public function index()
    {
        return view('accountingg.home');
    }

    
    public function view_inv()
    {           //model
        $data=inventory::all();
        $data1=user::all();
        return view('accountingg.home', compact('data','data1'));
                //  blade       model
    }

    //------------------------------------------------------------------
    //ACCOUNTING
    public function view_users()
    {           //model
        $data2=user::all();
        return view('accountingg.accountingg_accounting', compact('data2'));
                //  blade       model
    }

    public function accountingg_updateuser(Request $request)
    {           //model

        $user=DB::table("users")->where("id",$request->input("id"))->first();
        //print_r($user);
        return view('accountingg.accountingg_updateuser', compact('user'));
                //  blade       model
    }

    public function accountingg_deleteuser(Request $request)
    {           //model

        DB::table("users")->where("id",$request->input("id"))->delete();
        //print_r($user);
        //return view('updateuser', compact('user'));
        return redirect('accountingg_accounting')->with('success', 'Item Deleted Successfully!');;
                //  blade       model
    }

    public function accountingg_simpanuser(Request $request)
    {           //model

        DB::table("users")->where("id",$request->input("id"))->update(["salary"=>$request->input("salary")]);
        //print_r($user);
        //return view('updateuser', compact('user'));
                //  blade       model
        return redirect('accountingg_accounting')->with('success', 'Item Updated Successfully!');;
    }
}