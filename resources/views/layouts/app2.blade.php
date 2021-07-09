<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Directory</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <link href="{{asset('css/all.min.css')}}" rel="stylesheet">
        
    @yield('styles')
    </head>
    <body style="background-color:#6e4904">
        <div class=''> @include('pages.nav')</div>
        
        <main class="container py-5">
        @yield('content')
    </main>


    <div class="modal fade" id="update_password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form action="" id="form_password">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                
                    <div class="form-group row">        
                        <div class="col-10 d-none"  id="error_message">
                            <div class="alert alert-danger" role="alert">
                                Password doesn't matched!
                            </div> 
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right"> New Password </label>           
                        <div class="col-6">
                            <input type="password" class="form-control" placeholder="" name="password" id="pass"> 
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right"> Confirm Password </label>           
                        <div class="col-6">
                            <input type="password" class="form-control" placeholder="" name="password_confirm" id="pass2"> 
                        </div>
                    </div>
                
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
          </div>
        </div>
      </div>

    <script src="{{ asset('js/app.js') }}"></script>
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
            if (password == password_confirm){
                axios.post('update_password', {password:password}).then((response) => {
                    alert(response.data);
                    $('#update_password').modal('hide');
                })
            } else {
                $('#error_message').removeClass('d-none')
            }
        })
    })
</script>

</body>

</html>

