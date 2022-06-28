<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add User Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>G A R M E N T Home Page</title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" href="util.css">
	<link rel="stylesheet" href="main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="sidebar">
        <div class="corp">
            <div class="corp_name"><b>- N I A G A R A -</b></div>
            <div class="line"><b>__________________________</b></div>
        </div>


        <ul class="nav_list">
            <li>
                <a href="/superadmin">
                    <i class='bx bxs-home'></i>
                    <span class="links_name">H O M E</span>
                </a>
            </li>

            <li>
                <a href="/superadmin_manufaktur">
                    <i class='bx bxs-briefcase-alt-2'></i>
                    <span class="links_name">M A N U F A C T U R E</span>
                </a>
            </li>

            <li>
                <a href="/superadmin_inventory1">
                    <i class='bx bxs-building'></i>
                    <span class="links_name">I N V E N T O R Y</span>
                </a>
            </li>

            <li>
                
            <div class="dropdown">
                <i class='bx bx-columns'></i>
                <span class="dropbtn">P A Y R O L L</span>
                <div class="dropdown-content">
                    <a href="/superadmin_payroll">
                        <i class='bx bxs-message-alt-add'></i>
                        <span class="links_name">T A Y L O R</span>
                    </a>
                    <a href="/superadmin_detailtaylor">
                        <i class='bx bxs-user-detail'></i>
                        <span class="links_name">D E T A I L</span>
                    </a>
                </div>
            </div>

            </li>
       
            <li>
                <a href="/superadmin_adduser">
                    <i class='bx bxs-user-plus' ></i>
                    <span class="links_name">A D D - U S E R</span>
                </a>
            </li>
            <li>
                <a href="/superadmin_accounting">
                    <i class='bx bxs-user-plus' ></i>
                    <span class="links_name">A C C O U N T I N G</span>
                </a>
            </li>
            <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    <i class='bx bxs-log-out'></i>
                    <span class="links_name">L O G - O U T</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                
            </li>
        </ul>
	</div>
	
	<div class="limiter">
		<div class="container-regis100">
			<div class="wrap-regis100">

				<form method="POST" action="adduser" class="regis100-form validate-form">
                @if(Session::has('success'))
                    <script>
                        var message="{{ Session::get('success') }}"
                        alert(message);
                    </script>
                @endif
                 {{ csrf_field() }}

					<span class="regis100-form-title">
						A D D - U S E R
					</span>

					<div class="wrap-input100 validate-input">
						<select class="input100 @error('role') is-invalid @enderror" name="role" placeholder="Role" required>
							<option value="superadmin">superadmin</option>
							<option value="tukang_potong">tukang_potong</option>
							<option value="supervisor_pabrik">supervisor_pabrik</option>
							<option value="accounting">accounting</option>
						</select>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class='bx bxs-briefcase-alt-2'></i>
						</span>
						@error('role')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
                	</div>

					<div class="wrap-input100 validate-input">
						<input id="first_name" type="text" class="input100 @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" placeholder="First Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class='bx bxs-user'></i>
						</span>
						@error('first_name')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					<div class="wrap-input100 validate-input">
						<input id="last_name" type="text" class="input100 @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" placeholder="Last Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class='bx bxs-user'></i>
						</span>
						@error('last_name')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					
					<div class="wrap-input100 validate-input">
						<input id="no_hp" type="text" class="input100 @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ old('no_hp') }}" required autocomplete="no_hp" placeholder="No HP (ex. 08xxxx)">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class='bx bxs-phone'></i>
						</span>
						@error('no_hp')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input id="email" type="email" class="input100 @error('no_hp') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class='bx bxs-envelope'></i>
						</span>
						@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class='bx bxs-key' ></i>
						</span>
						@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							{{ __('ADD') }}
						</button>
                    </div>

				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

