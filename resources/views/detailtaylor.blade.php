
@extends('layouts.sidebar')
@section('sidebar')
    </div>

    
    @extends('layouts.navbar_profile')
    @section('navbar_profile')
    @endsection
    </div>

    <div class="manuf_window">
        <div class="box_outter3" style="padding:10px">
            <div class="box3_header"> <b>TAYLOR DETAIL</b> </div>  
                
                
            <form method="POST" action="cekpenjahit">

                 {{ csrf_field() }}
                <div class="box_list1">  
                <span style="padding-right : 50px;" class="details">Nama Penjahit</span>
                <select class="browser-default custom-select" id="select1">
                    <!-- <option selected="" id="option" name="option">Select Nama Penjahit</option> -->
                    @foreach($nama as $namaa)
                    <option value="{{$namaa->nama_penjahit}}" ? selected="" name="nama_jahit">{{$namaa->nama_penjahit}}</option>
                    @endforeach
                </select>
                    
                </div>
                <br/>
                <div class="box_list1"> 
                <br/>
                <br/>
                <br/>
                <button>Cari</button>    
            </form>

            
            <div class="box_result" style="display:none">
                @foreach($pr as $prr)
                    

                @endforeach
            </div>


        </div>
    </div>
    <script>
        $(document).ready(function()
        {
          var jumlah = 0;
          
        });
        </script>
@endsection