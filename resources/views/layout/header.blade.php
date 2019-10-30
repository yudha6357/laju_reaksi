<!-- Header section -->
<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
	<header class="header-section">
		<img style="height:60px;width:40px;margin-left:20px" src="./img/uin.png">
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
        </div>

		<div class="nav-warp">
             <ul class="main-menu">
				<li><a href="./dasboard">Home</a></li>
                <li><a href="./materi">Materi</a></li>
                @guest
                @else
                @if (Auth::user()->hasRole('admin'))
                <li><a href="./soal">soal</a></li>
                @endif
                @endguest
                <li class="dropdown"><a href="./kalkulator">kalkulator</a>
                    <ul class="dropdown-content">
                    <li><a href="#">xxxx</a></li>
                        <li><a href="#">yyyyyy</a></li>
                            <li><a href="#">zzzzzz</a></li>
                    </ul></li>
				<li><a href="./quis">Quis</a></li>
                <li><a href="./tentang">Tentang</a></li>
                @guest
                <div class="user-panel">
                        <a href="./login">Login</a> /
                        <a href="./register">Register</a>
                    </div
                @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" style="background-color: black"  aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
            </ul>
		</div>
	</header>
	<!-- Header section end -->
