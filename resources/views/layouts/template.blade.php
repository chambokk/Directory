<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>Provincial Directories</title>

        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome-free-5.15.3-web/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome-free-5.15.3-web/css/brands.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome-free-5.15.3-web/css/solid.css') }}" rel="stylesheet">
    @yield('styles')

    </head>
    <body>
        <div class="d-flex" id="app">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
            
                <div class="app-branding">
                    <a class="app-logo" href="index.html">
                        <img class=" mt-2 logo-icon " style="margin-left:80px"
                        src="{{ asset('assets/images/ddo_hw.png') }}"
                        alt="logo" width="80" height="80"
                        style="text-align:center;"/> 
                    </a>
                    <p class="mb-4" style="text-align:center; color:yellow; font-size:85%;">Directories</p>
                </div>
               
                <div class="list-group list-group-flush " id="navbarSupportedContent">
                    <a class="{{ Route::is('create.index') ? 'active' : '' }} nav-link list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('create.index') }}" > <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-file-earmark-person mx-1" viewBox="0 0 16 16">
                        <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2v9.255S12 12 8 12s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h5.5v2z"/>
                      </svg> Directories</a>

                      <a class="{{ Route::is('addoffice.index') ? 'active' : '' }} nav-link list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('addoffice.index') }}" > <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-file-earmark-person mx-1" viewBox="0 0 16 16">
                        <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2v9.255S12 12 8 12s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h5.5v2z"/>
                      </svg> Office</a>
                </div>
  
            </div>

            <!-- Page content wrapper-->
            <div id="page-content-wrapper" style="background-color: #f5f6fd">
                <!-- Top navigation-->

                <nav class="navbar navbar-light bg-light border-bottom mr-auto">
                    <div class="container-fluid">
                      
                        <div class="col-auto">
                            <a data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                                id="navbar-toggler"
                                class="
                                navbar-toggler
                                    d-inline-block d-xl-none
                                "
                                href="#">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="30"
                                    height="30"
                                    viewBox="0 0 30 30"
                                    role="img">
                                    <title>Menu</title>
                                    <path
                                        stroke="currentColor"
                                        stroke-linecap="round"
                                        stroke-miterlimit="10"
                                        stroke-width="2"
                                        d="M4 7h22M4 15h22M4 23h22"
                                    ></path>
                                </svg>
                            </a>
                        </div>

 
 <!-- Right Side Of Navbar -->
 <ul class="navbar-nav">
    <!-- Authentication Links -->
    @guest
        @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
        @endif

        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
           
            <!--  {{ Auth::user()->name }} -->
                <img class="mb-2" width="35" height="35"
                    src="assets/images/user.png"
                    alt="user profile" 
            />
            </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                

                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#update_password">
                        <i class="fa fa-edit"></i> Accounts
                    </a>


                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        <i  class="fa fa-power-off"></i> Logout
                    </a>
                    

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
        </li>
    @endguest
</ul>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
                        </div>
                
                </nav>

           <!-- Page content-->
           <main class="py-4">
                    @yield('content')
                </main>

            </div>
        </div>


        <div class="modal fade" id="update_password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="" id="form_password">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Password</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"></span>
                </button>
                        </div>
                        <div class="modal-body">
                            
                        <div class="form-group row">        
                            <div class="col-12 d-none text-center"  id="error_card">
                                <div class="alert alert-danger" role="alert" id="error_message">
                                    
                                </div> 
                            </div>
                        </div>
                        
                                <label class="font-weight-bold">Old Password</label>   
                                <input type="password" class="mb-2 form-control" id="old_password" placeholder="" name="old_password"> 

                                <label class="font-weight-bold">New Password </label>   
                                <input type="password" class="mb-2 form-control" placeholder="" name="password" id="pass"> 

                                <label class="font-weight-bold">Confirm Password </label>   
                                <input type="password" class="mb-2 form-control" placeholder="" name="password_confirm" id="pass2"> 

                        </div>
                        <div class="modal-footer">
                       
                        <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}" ></script>
        <script src="{{ asset('js/notify.min.js') }}"></script>
        <script src="{{ asset('js/moment.js') }}"></script>
        <script src="{{ asset('js/swal.min.js') }}"></script>
    
        @yield('scripts')

        <script>
      
            $(document).ready(function() {
                $('#form_password').submit(function(e) { 
                    e.preventDefault();
                    var password = $('#pass').val();
                    var password_confirm = $('#pass2').val();
                    var old_password = $('#old_password').val();
                    var formData = {
                        password: password,
                        old_password: old_password
                    };
                    if (password == password_confirm){
                        axios.post('update_password', formData).then((response) => {
                            alert(response.data);
                            $('#update_password').modal('hide');
                        }).catch((error)=> {
                            // console.log(error.response.data.message)
                            $('#error_card').removeClass('d-none');
                            $('#error_message').html(error.response.data.message);
                        })
                    } else { 
                        $('#error_card').removeClass('d-none');
                        $('#error_message').html("Password doesn't matched!");
                    }
                }) 
            })
        </script>

    </body>
</html>