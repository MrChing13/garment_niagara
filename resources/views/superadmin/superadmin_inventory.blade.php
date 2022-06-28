
@extends('layouts.superadmin_sidebar')
@section('superadmin_sidebar')
    </div>

    
    @extends('layouts.navbar_profile')
    @section('navbar_profile')
    @endsection
    </div>

    <div class="manuf_window">
        <div class="box_outter3" style="padding:10px">
            <div class="box3_header"> <b>INVENTORY</b>
            </div>  


            <form method="POST" action="tambahproduk">
                @if(Session::has('success'))
                    <script>
                        var message="{{ Session::get('success') }}"
                        alert(message);
                    </script>
                @endif

                {{ csrf_field() }}
                <div class="box_list1">  
                    <span style="padding-right : 50px;" class="details">Nama Supplier</span>
                    <input type="text" name="supplier" placeholder="Nama Supplier" required>
                </div>
                <br/>
                <div class="box_list1"> 
                    <span style="padding-right : 40px;" class="details">Kategori Produk  </span>
                    <input type="text" name="kategori" placeholder="Kategori Produk" required>
                   
                </div>
                <br/>
                <div class="box_list1">     
                    <span style="padding-right : 57px;" class="details">Nama Produk</span>
                    <input type="text" name="nama" placeholder="Nama Produk" required>
                </div>
                <br/>
                <div class="box_list2">    
                    <span style="padding-right : 43px;" class="details">Panjang Produk </span>
                    <input type="text" name="panjang" placeholder="..." required>
                    <span class="box_panjang">Meter </span>
                </div>
                <br/>
                <div class="box_list2"> 
                    <span style="padding-right : 62px;" class="details">Berat Produk </span>
                    <input type="text" name="berat" placeholder="..." required>
                    <span class="box_berat">Kg</span>
                    
                </div>
                <br/>
                <br/>
                <br/>
                <button id="btncreate" type="submit">Create</button>
            </form>

        </div>
    </div>

@endsection