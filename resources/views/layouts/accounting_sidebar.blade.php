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
                <a href="/accountingg">
                    <i class='bx bxs-home'></i>
                    <span class="links_name">H O M E</span>
                </a>
            </li>
            <li>
                <a href="/accountingg_accounting">
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
        @yield('accounting_sidebar')

</body>
</html>