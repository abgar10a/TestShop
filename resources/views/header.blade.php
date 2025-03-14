<header>
    <nav>
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <div></div>
            <div>
                <a href="{{ route('/') }}">Home</a>
            </div>
            <div>
                @auth
                    <a href="{{ route('account') }}">{{ Auth::user()->name }}</a>
                    <form action="/logout" method="POST">
                        @csrf
                        <button>Log out</button>
                    </form>
                @else
                    <a href="{{ route('login') }}">Login</a> /
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        </div>
    </nav>
</header>
