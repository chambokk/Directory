

    <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color:#f1cb4b;">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png')}}" class="img-fluid" width="50">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                @if (auth()->user())
                    
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item active">
                            <a class="nav-link font-weight-bold" style="color: rgb(27, 55, 82);font-size:15px"  href="{{ url('create') }}">Directories</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link font-weight-bold" style="color: rgb(27, 55, 82);font-size:15px"  href="{{ url('addoffice') }}">Office</a>
                        </li>
                    </ul>
                @endif

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        {{-- @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif --}}
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>



                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                {{-- update password  --}}

                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#update_password">
                                    <i  class="fa fa-edit"> {{ __('Change password') }} </i>  
                                </a>


                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                     <i  class="fa fa-power-off"> {{ __('Logout') }} </i>
                                </a>
                                

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
    </nav>
    