
@extends('layouts.supervisorpabrik_sidebar')
@section('supervisorpabrik_sidebar')
    </div>

    @extends('layouts.navbar_profile')
    @section('navbar_profile')
    @endsection
    </div>
    
    <div class="manuf_window">
        <div class="box_outter3" style="padding:10px">
            <div class="box3_header"> <b>PAYROLL</b> </div>  

            @if(Session::has('success'))
                <script>
                    var message="{{ Session::get('success') }}"
                    alert(message);
                </script>
            @endif
            
            <div class="tabel"> 
            <table>
                <thead class="th" style="color:white;">
                    <th> ID </th>
                    <th> Supplier </th>
                    <th> Produk </th>
                    <th> Penjahit </th>
                    <th> Bagian </th>
                    <th> Jumlah </th>
                    <th> Harga </th>
                    <th> Total </th>
                    <th> Action </th>
                </thead>
                <tbody style="text-align: center; color : white;">
                @foreach($data as $item)
                    <tr>
                        <td>{{ $item->ID }}</td>
                        <td>{{ $item->nama_supplier }}</td>
                        <td>{{ $item->nama_produk }}</td>
                        <td>{{ $item->nama_penjahit }}</td>
                        <td>{{ $item->bagian_jahit }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>
                            <?php
                                echo 'Rp ';
                                echo number_format($item->harga_per_bagian);
                                echo ',-';
                            ?>
                        </td>
                        <td>
                            <?php
                                echo 'Rp ';
                                echo number_format($item->harga_total);
                                echo ',-';
                            ?>
                        </td>
                        <td>
                            <a href="supervisorpabrik_payroll1?ID=<?php echo $item->ID?>" class="btn btn-info" style="color: #75fcf3;"><span data-feather="edit"></span>Update</a>
                            <!-- //<button  onclick="location.href='/payroll+'" style="width:35px">+</button> -->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>


        </div>
    </div>

@endsection

