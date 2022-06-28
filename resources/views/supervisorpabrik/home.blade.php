

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@extends('layouts.supervisorpabrik_sidebar')
@section('supervisorpabrik_sidebar')
    </div>
    
    @extends('layouts.navbar')
    @section('navbar')
    @endsection
    </div>

    <div class="window">
        <div class="box_outter">
            <div class="box1">
                <div class="box_header"> Employee Stats
                </div>

                <div class="tabel">
                <table>
                <thead class="th" style="color:#474444;">
                    <th> ID </th>
                    <th> Nama </th>
                    <th> No HP</th>
                    <th> Role </th>
                </thead>
                <tbody style="text-align: center; color :#474444;">
                        @foreach($data1 as $item1)
                        <tr>
                            <td>{{ $item1->id }}</td>
                            <td>{{ $item1->first_name }} {{ $item1->last_name }} </td>
                            <td>{{ $item1->no_hp }}</td>
                            <td>{{ $item1->role }} </td>
                        </tr>
                        @endforeach
                </tbody>
                </table>
                </div>
            </div>

            <div class="box2">
                <div class="box_header"> Stocks </div>

                <div class="tabel">
                <table>
                <thead class="th" style="color:#474444;">
                    <th> ID </th>
                    <th> Supplier </th>
                    <th> Kategori</th>
                    <th> Produk</th>
                    <th> Panjang </th>
                    <th> Berat </th>
                </thead>
                <tbody style="text-align: center; color :#474444;">
                        @foreach($data as $item)
                        <tr>
                            <td>{{ $item->ID }}</td>
                            <td>{{ $item->nama_supplier }}</td>
                            <td>{{ $item->kategori_produk }}</td>
                            <td>{{ $item->nama_produk }}</td>
                            <td>{{ $item->panjang_produk }} m</td>
                            <td>{{ $item->berat_produk }} kg</td>
                        </tr>
                        @endforeach
                </tbody>
                </table>
                </div>
            </div>

        </div>
    </div>

@endsection
