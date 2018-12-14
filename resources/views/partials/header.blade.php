@if(Route::currentRouteName() == 'index')
<nav class="navbar navbar-expand navbar-dark bg-transparent">
    @else
        <nav class="navbar navbar-expand navbar-dark bg-dark">

        @endif
    <a href="{{ route('index') }}" class="navbar-brand">Sparrow Airlines</a>
    <ul class="navbar-nav text-white">
        @if(!Auth::check())
            <li class="nav-item mt-2"><a href="{{ url('/login') }}" class="nav-link">Login</a></li>
            <li class="nav-item mt-2"><a href="{{ url('/register') }}" class="nav-link">Register</a></li>
        @else
            {{--<li><a href="{{ route('passenger.trip') }}" class="nav-link">Your trip</a></li>--}}
            <li class="mt-2"><a href="{{ route('passenger.trip') }}" class="nav-link">My Trip</a></li>
            <li class="mt-2"><a href="{{ route('passenger.profile') }}" class="nav-link">Profile</a></li>

            <li class="nav-item ml-auto mt-2">
                <a href="{{ url('/logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                   class="nav-link">
                    Logout
                </a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST">
                    {{ csrf_field() }}
                </form>
            </li>
        @endif
    </ul>
</nav>
