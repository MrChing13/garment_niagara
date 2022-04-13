<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>G A R M E N T Home Page</title>

</head>
<body>
    <div class="sidebar">
        <div class="corp">
            <div class="corp_name"><b>- N I A G A R A -</b></div>
            <div class="line"><b>__________________________</b></div>
        </div>


        <ul class="nav_list">
            <li>
                <a href="/home">
                    <i class='bx bxs-home'></i>
                    <span class="links_name">H O M E</span>
                </a>
                <!-- <span class="links_name">H O M E</span> -->
            </li>

            <li>
                <a href="/manufaktur">
                    <i class='bx bxs-briefcase-alt-2'></i>
                    <span class="links_name">M A N U F A C T U R E</span>
                </a>
                <!-- <span class="links_name">H O M E</span> -->
            </li>

            <li>
                <a href="/inventory">
                    <i class='bx bxs-building'></i>
                    <span class="links_name">I N V E N T O R Y</span>
                </a>
                <!-- <span class="links_name">H O M E</span> -->
            </li>

            <li>
                
            <div class="dropdown">
                <i class='bx bx-columns'></i>
                <span class="dropbtn">P A Y R O L L</span>
                <div class="dropdown-content">
                    <a href="/payroll">
                        <i class='bx bxs-message-alt-add'></i>
                        <span class="links_name">T A Y L O R</span>
                    </a>
                    <a href="/detailtaylor">
                        <i class='bx bxs-user-detail'></i>
                        <span class="links_name">D E T A I L</span>
                    </a>
                </div>
            </div>

            </li>
       
            <li>
                <a href="/adduser">
                    <i class='bx bxs-user-plus' ></i>
                    <span class="links_name">A D D - U S E R</span>
                </a>
            </li>
            <li>
                <!-- <a href="/home">
                    <i class='bx bxs-log-out'></i>
                    <span class="links_name">L O G - O U T</span>
                </a> -->
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
        @yield('sidebar')

</body>
</html>