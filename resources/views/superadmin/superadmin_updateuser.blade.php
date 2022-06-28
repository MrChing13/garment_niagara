
@extends('layouts.superadmin_sidebar')
@section('superadmin_sidebar')
    </div>

    @extends('layouts.navbar_profile')
    @section('navbar_profile')
    @endsection
    </div>


    <div class="manuf_window">
        <div class="box_outter3" style="padding:10px">
            <div class="box3_header"> <b>Update Salary</b>
            </div>


            <form method="POST" action="superadmin_simpanuser">
                        @if(Session::has('success'))
                            <script>
                                var message="{{ Session::get('success') }}"
                                alert(message);
                            </script>
                        @endif
                 {{ csrf_field() }}
                <div class="box_list1">

                <h3>Update Gaji <?php echo $user->first_name." ".$user->last_name;?></h3>
                    <input type="hidden" name="id" value="<?php echo $user->id;?>"/>
                    <br/>
                    <input type="number" name="salary" value="<?php echo $user->salary;?>"/>
                    <br/>
                    <button>Simpan</button>
                </div>
            </form>

        </div>
    </div>

@endsection
