
@extends('layouts.superadmin_sidebar')
@section('superadmin_sidebar')
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
                <select class="browser-default custom-select" id="nama_penjahit" name="nama_penjahit" id="select1">
                    <!-- <option selected="" id="option" name="option">Select Nama Penjahit</option> -->
                    <?php
                        $arr=[];
                    ?>
                    @foreach($nama as $namaa)
                        <?php
                            if (!in_array($namaa->nama_penjahit,$arr))
                            {
                                ?>
                                <option value="{{$namaa->nama_penjahit}}">{{$namaa->nama_penjahit}}</option>
                                <?php
                                $arr[]=$namaa->nama_penjahit;
                            }
                        ?>
                     
                    @endforeach
                </select>
                    
                </div>
                <br/>
                <div class="box_list1"> 
                <br/>
                <br/>
                <br/>
                <button type="button" onclick="cari();">Cari</button>   
                <div id="result"></div> 
            </form>

            
            <div class="box_result" style="display:none">
                @foreach($pr as $prr)
                    

                @endforeach
            </div>


        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        function cari()
        {
            var nama_penjahit=$("#nama_penjahit").val();
            $.ajax({
                    type: "GET",
                    url: "<?php echo url("cekpenjahit");?>",
                    data:{nama_penjahit},
                    dataType:"json",
                    success : function(data){
                          console.log(data);
                          $("#result").html(data.total);
                    }
            });
        }
        $(document).ready(function()
        {
          var jumlah = 0;
          
        });
        </script>
@endsection