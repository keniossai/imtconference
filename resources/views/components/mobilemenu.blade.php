<ul>
    <li class="active-menu">
        <a href="/">Home</a>
    </li>
        <li><a href="about.html">About Us</a></li>
        <li><a href="#">Why Attend</a></li>
        <li><a href="#">Sponsorship Benefits</a></li>
        <li><a href="#">Organisers</a></li>
        <li><a href="#">Contact</a></li>
        @auth
            <li>
                <a href="blog.html">
                    <img src="{{ user('photo') }}" alt="Photo" width="30"
                            class="rounded-circle">
                        {{ user('name') }}
                </a>
                <ul class="sub-menu">
                    <li><a href="{{ route('users.show', user()) }}">Profile</a></li>
                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('logout') }}">Logout</a></li>
                </ul>
            </li>
        @else
        <li><a href="{{ route('login') }}">login</a></li>
        <li><a href="{{ route('register') }}">Register</a></li>
        @endif
</ul>
