<nav class="navbar navbar-light navbar-expand-lg" style="background-color: #f1cb4b;">

    <img src="{{ asset('images/logo.png')}}" class="img-fluid" width="45">
       <a class="navbar-nav auto font-weight-bold pl-2" style="color: rgb(14, 35, 48); font-size:25px">Intercom</a>

       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav container">
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold" style="color: rgb(27, 55, 82);font-size:18px"  href="/"><i class="fas fa-home"></i>Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="color: rgb(27, 55, 82);font-size:18px">
                   Category
                    </a>


                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ url('/directories/1') }}">Provincial  Offices</a>
                        <a class="dropdown-item" href="{{ url('/directories/2') }}">Municipal Offices</a>
                        <a class="dropdown-item" href="{{ url('/directories/3') }}">National Offices</a>
                    </div>
                </li>
                
            </ul>
        </div>

    </nav>