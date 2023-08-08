<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">BDMS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            </ul>

            <ul class="navbar-nav mb-2 mb-lg-0">
                @auth

                <li class="nav-item  mt-2">
                    <a href="{{ route('doner.MyRequest') }}" class="navbar-brand">My Donation</a>
                </li>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">

                        <h5 class="d-none d-lg-inline-flex" style="color: rgb(84, 84, 235)">{{ Auth::user()->userName }}</h5>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-dark border-0 rounded-0 rounded-bottom m-0">
                        <a href="{{route('profile.edit')}}" class="dropdown-item" style="color: rgb(84, 84, 235)">My Profile</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </div>

                </div>

                @else
                <a href="{{ route('doner.AllRequest') }}" class="navbar-brand"> Donation</a>

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
