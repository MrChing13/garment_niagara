
@extends('layouts.sidebar')
@section('sidebar')
    </div>

    
    @extends('layouts.navbar_profile')
    @section('navbar_profile')
    @endsection
    </div>

    <div class="manuf_window">
        <div class="box_outter3" style="padding:10px">
            <div class="box3_header"> <b>PAYROLL</b>
            </div>  


            <form method="POST" action="tambahpenjahit">

                {{ csrf_field() }}
                <div class="box_list1">  
                    <span style="padding-right : 103px;" class="details">Bulan</span>
                    <input type="text" name="bulan" placeholder="Bulan" required>
                </div>
                <br/>
                <div class="box_list1"> 
                    <span style="padding-right : 40px;" class="details">Nama Penjahit</span>
                    <input type="text" name="nama_penjahit" placeholder="Nama Penjahit" required>
                </div>
                <br/>
                <div class="box_list1">     
                    <span style="padding-right : 59px;" class="details">Bagian Jahit</span>
                    <input type="text" name="bagian" placeholder="Bagian Jahit" required>
                </div>
                <br/>
                <div class="box_list2">    
                    <span style="padding-right : 93px;" class="details">Jumlah</span>
                    <input type="text" name="jumlah" placeholder="..." required>
                    <span class="box_panjang">pcs </span>
                </div>
                <br/>
                <div class="box_list2"> 
                    <span style="padding-right : 20px;" class="details">Harga per Bagian</span>
                    <span class="box_berat">Rp.</span>
                    <input type="text" name="harga" placeholder="..." required>
                    <span class="box_berat">,-</span>
                </div>
                <br/>
                <!-- <div class="box_list2"> 
                    <span style="padding-right : 62px;" class="details">Harga Total</span>
                    <span class="box_berat">Rp.</span>
                    <input type="text" name="harga_total" placeholder="...">
                    <span class="box_berat">,-</span>
                </div> -->
                <br/>
                <br/>
                <br/>
                <button type="submit">Add</button>    
            </form>

        </div>
    </div>

@endsection