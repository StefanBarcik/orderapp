<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="/order/step1">Order</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            @guest
                <li class="nav-item"><a class="nav-link" href="/login"><i class="fa-solid fa-right-to-bracket"></i> Login</a></li>
            @endguest
            @auth
                <li class="nav-item"><a class="nav-link" href="/logout"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></li>
                <li class="nav-item"><a class="nav-link" href="/profile"><i class="fa-solid fa-user"></i> Profile</a></li>
            @endauth
        </ul>
    </div>
</nav>
