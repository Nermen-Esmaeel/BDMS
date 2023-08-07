<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">BDMS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-item nav-link">Home</a>
                </li>

            </ul>
            <ul class="navbar-nav mb-2 mb-lg-0">
                @auth
                <a class="nav-item nav-link" href="{{route('dashboard')}}" role="button" aria-expanded="false">
                    Dashboard
                </a>


                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a class="nav-item nav-link" href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>

                @else
                <a class="nav-item nav-link" href="{{ route('login') }}" role="button" aria-expanded="false">
                    Login
                </a>
                <a class="nav-item nav-link" href="{{route('register')}}" aria-expanded="false">
                    Donor Sign Up!
                </a>


                @endauth

            </ul>
        </div>
    </div>
</nav>
