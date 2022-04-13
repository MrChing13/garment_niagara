
@extends('layouts.sidebar')
@section('sidebar')
    </div>

    @extends('layouts.navbar_profile')
    @section('navbar_profile')
    @endsection
    </div>
    
    
    <div class="manuf_window">
        <div class="box_outter3" style="padding:10px">
            <div class="box3_header"> <b>PAYROLL</b> </div>  

            <div class="tabel"> 
            <table>
                <thead class="th" style="color:white;">
                    <th> ID </th>
                    <th> Bulan </th>
                    <th> Nama </th>
                    <th> Bagian </th>
                    <th> Jumlah </th>
                    <th> Harga </th>
                    <th> Total </th>
                </thead>
                <tbody style="text-align: center; color : white;">
                @foreach($data as $item)
                    <tr>
                        <td>{{ $item->ID }}</td>
                        <td>{{ $item->bulan }}</td>
                        <td>{{ $item->nama_penjahit }}</td>
                        <td>{{ $item->bagian_jahit }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>{{ $item->harga_per_bagian }}</td>
                        <td>Rp {{ $item->harga_total }},-</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            <button  onclick="location.href='/payroll+'" style="left: 920px; width:35px">+</button>


        </div>
    </div>

@endsection
