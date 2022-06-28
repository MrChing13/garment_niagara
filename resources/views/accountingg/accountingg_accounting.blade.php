
@extends('layouts.accounting_sidebar')
@section('accounting_sidebar')
    </div>

    @extends('layouts.navbar_profile')
    @section('navbar_profile')
    @endsection
    </div>


    <div class="manuf_window">
        <div class="box_outter3" style="padding:10px">
            <div class="box3_header"> <b>ACCOUNTING</b>
            </div>

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
                    <th> Name </th>
                    <th> HP</th>
                    <th> Email</th>
                    <th> Role </th>
                    <th> Salary </th>
                    <th> Action </th>
                </thead>
                <tbody style="text-align: center; color :white">
                    @foreach($data2 as $item2)
                        <tr>
                            <td>{{ $item2->id }}</td>
                            <td>{{ $item2->first_name }} {{ $item2->last_name }} </td>
                            <td>{{ $item2->no_hp }}</td>
                            <td>{{ $item2->email }} </td>
                            <td>{{ $item2->role }} </td>
                            <td>
                                <?php
                                    echo 'Rp ';
                                    echo number_format($item2->salary);
                                    echo ',-';
                                ?>
                            </td>
                            <td>
                                <a href="accountingg_updateuser?id=<?php echo $item2->id?>" class="btn btn-info" style="color: #75fcf3;"><span data-feather="edit"></span>Update</a>
                                |
                                <a href="accountingg_deleteuser?id=<?php echo $item2->id?>" class="btn btn-warning" style="color: #fce675;" onclick="return confirm('Are you sure?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            <!-- <button  id="btnadd" onclick="location.href='/inventory'" style="left: 870px;">ADD</button> -->


        </div>
    </div>

@endsection
