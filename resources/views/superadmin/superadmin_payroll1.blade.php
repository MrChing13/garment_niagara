
@extends('layouts.superadmin_sidebar')
@section('superadmin_sidebar')
    </div>

    
    @extends('layouts.navbar_profile')
    @section('navbar_profile')
    @endsection
    </div>

    <div class="manuf_window">
        <div class="box_outter3" style="padding:10px">
            <div class="box3_header"> <b>PAYROLL</b>
            </div>

            <form method="POST" action="superadmin_tambahpenjahit">
                @if(Session::has('success'))
                    <script>
                        var message="{{ Session::get('success') }}"
                        alert(message);
                    </script>
                @endif

                {{ csrf_field() }}
                @method('PATCH')
                <input type="hidden" name="ID" value="<?php echo $payroll->ID;?>">
                <div class="box_list1"> 
                    
                    <br/>

                    <span style="padding-right : 40px;" class="details">Nama Penjahit</span>
                    <input type="text" name="nama_penjahit" value="<?php echo $payroll->nama_penjahit;?>" placeholder="Nama Penjahit" required>
                </div>
                <br/>
                <div class="box_list1">     
                    <span style="padding-right : 59px;" class="details">Bagian Jahit</span>
                    <input type="text" name="bagian" value="<?php echo $payroll->bagian_jahit;?>" placeholder="Bagian Jahit" required>
                </div>
                <br/>
                <div class="box_list2">    
                    <span style="padding-right : 93px;" class="details">Jumlah</span>
                    <input type="text" name="jumlah" value="<?php echo $payroll->jumlah;?>" placeholder="..." required>
                    <span class="box_panjang">pcs </span>
                </div>
                <br/>
                <div class="box_list2"> 
                    <span style="padding-right : 20px;" class="details">Harga per Bagian</span>
                    <span class="box_berat">Rp.</span>
                    <input type="number" name="harga" value="<?php echo $payroll->harga_per_bagian;?>" placeholder="..." required>
                    <span class="box_berat">,-</span>
                </div>
                <br/>
                <br/>
                <br/>
                <br/>
                <button type="submit">Add</button>    
            </form>

        </div>
    </div>

@endsection