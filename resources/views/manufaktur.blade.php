
@extends('layouts.sidebar')
@section('sidebar')
    </div>

    @extends('layouts.navbar_profile')
    @section('navbar_profile')
    @endsection
    </div>
    
    
    <div class="manuf_window">
        <div class="box_outter3" style="padding:10px">
            <div class="box3_header"> <b>MANUFACTURE</b>
            </div>  


            <form method="POST" action="simpanproduk">

                 {{ csrf_field() }}
                <div class="box_list1">  
                    
                    <span style="padding-right : 50px;" class="details">Nama Supplier</span>
                    <select name="supplier">
                        <?php
                            for ($i=0;$i<count($table);$i++)
                            {
                                $dtl=$table[$i];
                                ?>
                                    <option value="<?php echo $dtl->nama_supplier;?>">
                                        <?php
                                            echo $dtl->nama_supplier;
                                        ?>
                                    </option>
                                <?php
                            }
                        ?>
                    </select>
                </div>
                <br/>
                <div class="box_list1"> 
                    <span style="padding-right : 40px;" class="details">Kategori Produk  </span>
                    <select name="kategori">
                        <?php
                            for ($i=0;$i<count($table);$i++)
                            {
                                $dtl=$table[$i];
                                ?>
                                    <option value="<?php echo $dtl->kategori_produk;?>">
                                        <?php
                                            echo $dtl->kategori_produk;
                                        ?>
                                    </option>
                                <?php
                            }
                        ?>
                    </select>
                </div>
                <br/>
                <div class="box_list1">     
                    <span style="padding-right : 57px;" class="details">Nama Produk</span>
                    <select name="nama">
                        <?php
                            for ($i=0;$i<count($table);$i++)
                            {
                                $dtl=$table[$i];
                                ?>
                                    <option value="<?php echo $dtl->nama_produk;?>">
                                        <?php
                                            echo $dtl->nama_produk;
                                        ?>
                                    </option>
                                <?php
                            }
                        ?>
                    </select>
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
                <button>Ambil</button>    
            </form>

        </div>
    </div>

@endsection
