<nav>

    <div class="nav-item">

        <div class="logo">
            YoyoTube
        </div>

        <div class="search-box">
            <form action="">
                <input type="search" required>
                <button type="submit">Search</button>
            </form>
        </div>

        <div class="link">

            <li><a href="{{route('form')}}">UPLOAD</a></li>
            @if (Auth::check())
            <li><a href="{{route('profile')}}">{{ Auth::user()->name }}</a></li>
            <form method="POST" style=" text-align: right; margin:auto" action="{{ route('logout') }}">
                @csrf
                <label for="Logout"></label>
                <li><input type="submit" style="padding: 5px;margin-top:5px" value="Logout"></li>
            </form>
            @else
            <li><a href="{{route('login')}}">LOGIN</a></li>
            @endif


        </div>



    </div>
</nav>