
@extends('layouts.sidebar')
@section('sidebar')
    </div>

    @extends('layouts.navbar_profile')
    @section('navbar_profile')
    @endsection
    </div>
    
    
    <div class="manuf_window">
        <div class="box_outter3" style="padding:10px">
            <div class="box3_header"> <b>INVENTORY</b>
            </div>  

            <div class="tabel">    
            <table>
                <thead class="th" style="color:white;">
                    <th> ID </th>
                    <th> Supplier </th>
                    <th> Kategori</th>
                    <th> Produk</th>
                    <th> Panjang </th>
                    <th> Berat </th>
                </thead>
                <tbody style="text-align: center; color :white">
                    @foreach($data as $item)
                    <tr>
                        <td>{{ $item->ID }}</td>
                        <td>{{ $item->nama_supplier }}</td>
                        <td>{{ $item->kategori_produk }}</td>
                        <td>{{ $item->nama_produk }}</td>
                        <td>{{ $item->panjang_produk }} meter</td>
                        <td>{{ $item->berat_produk }} kg</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            <button  id="btnadd" onclick="location.href='/inventory'" style="left: 870px;">ADD</button>

        </div>
    </div>

@endsection
