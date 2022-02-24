@extends('layouts.app2')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/dataTables/datatables.min.css')}}">
<link rel="stylesheet" href="{{ asset('css/dataTables/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{ asset('css/dataTables/responsive.bootstrap4.min.css')}}">
@endsection
@section('content')

<div class="container">
    <div class="row justify-content-center">
        {{-- <div class="col-md-12"> --}}
            <div class="card">
                <div class="card-header">
                    <h2>Directories</h2>
            
                    <div class="row">
                        <div class="col-md-2 col-1">
                        <button type="button" class="btn btn-primary add"> <i class="fas fa-plus"></i> Add</button></div>
                    </div>
                </div>
                
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped bg-light dt-responsive display" id="table_directory">
                            <thead>
                                <tr> 
                                    <th>Agency Name</th>
                                    <th>Office Name</th>
                                    <th>Contact Name</th>
                                    <th>Intercom No.</th>
                                    <th>Cellphone No.</th>
                                    <th>Landline No.</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($directory as $directories)
                                    <tr>
                                        @if($directories->category != null)
                                        <td>{{$directories->category->category}}</td>
                                        @else
                                        <td>No Category</td>
                                        @endif 
                                        <td>{{$directories->office->office}}</td> 
                                        <td>{{$directories->contact_name}}</td> 
                                        <td>{{$directories->directory_no}}</td> 
                                        <td>{{$directories->contact_no}}</td> 
                                        <td>{{$directories->type}}</td>
                                        <td>{{$directories->email}}</td>  
                                        <td><button data-id="{{$directories->id}}" class="btn btn-primary btn-sm edit"> <i class="fas fa-edit"></i></button>
                                        <button data-id="{{$directories->id}}" class="btn btn-danger btn-sm delete"><i class="fas fa-trash"></i></button></td>        
                                    </tr>
                                @endforeach
                            </tbody>    
                        </table>
                    </div>
                {{-- {{$directory->links()}} --}}
                </div>
            </div>  
        {{-- </div>     --}}
    </div>
</div>

<div class="modal fade modal-auto-clear" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Directory</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>
            <div class="col-md-12">

                <label class="font-weight-bold"> Category </label>
                <select class="form-control category_id" name="category_id">
                    {{-- <option disabled selected="true">choose office</option> --}}
                    <option value="" style=""> Select Category</option>
                    @foreach($category as $categories)
                    <option value="{{ $categories->id }}">{{ $categories->category }}</option>
                    @endforeach
                </select>

               <label class="font-weight-bold"> Office Name </label>
                <select class="form-control office_id" name="office_id">
                    {{-- <option disabled selected="true">choose office</option> --}}
                    <option value="" style=""> Select Office</option>
                    @foreach($office as $offices)
                    <option value="{{ $offices->id }}">{{ $offices->office }}</option>
                    @endforeach
                </select>
                
                <label class="font-weight-bold"> Contact Name </label>           
                <input type="text" class="form-control contact_name" placeholder="name">   
                
                <label class="font-weight-bold"> Intercom Number </label>
                <input type="text" class="form-control directory_no" placeholder="no.">   
                
                <label class="font-weight-bold"> Landline Number </label>
                <input type="text" class="form-control type" placeholder="type">

                <label class="font-weight-bold"> Contact Number </label>
                <input type="text" class="form-control contact_no" placeholder="contact">  

                <label class="font-weight-bold"> Email </label>
                <input type="text" class="form-control email" placeholder="email">  
                  
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary save">Save</button>
                  </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="col-md-12">

            <label class="font-weight-bold"> Category </label>
                <select class="form-control category_ids" name="category_id">
                    {{-- <option disabled selected="true">choose office</option> --}}
                    <option value="" style=""> Select Category</option>
                    @foreach($category as $categories)
                    <option value="{{ $categories->id }}">{{ $categories->category }}</option>
                    @endforeach
                </select>

            <label class="font-weight-bold"> Office Name </label>
            <select class="form-control office_ids" name="office_id">
                {{-- <option disabled selected="true">choose office</option> --}}
                <option value="" style=""> Select Office</option>
                @foreach($office as $offices)
                <option value="{{ $offices->id }}">{{ $offices->office }}</option>
                @endforeach
            </select>
         
            
            <label class="font-weight-bold"> Contact Name </label>           
            <input type="text" class="form-control contact_names" placeholder="name">   
            
            <label class="font-weight-bold"> Intercom Number </label>
            <input type="text" class="form-control directory_nos" placeholder="no.">   
            
            <label class="font-weight-bold"> Landline Number </label>
            <input type="text" class="form-control types" placeholder="type">
            
            <label class="font-weight-bold"> Contact Number </label>
            <input type="text" class="form-control contact_nos" placeholder="contact">  
            
            <input type="hidden" class="form-control ids"  name="ids">   

            <label class="font-weight-bold"> Email </label>
            <input type="text" class="form-control emails" placeholder="email">  
              
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary save_edit">Save</button>
              </div>
    </div>
      </div>
    </div>
</div>
        
@endsection

@section('scripts')

<script>
 $(function () {
    $('.add').click(function(){
         $('#myModal').modal('show')
     })

  })

  $('#table_directory').DataTable({
        language: {
            search: "Search Office:",
        },
        responsive:true,
        paging:true,
        info:false,
        "bSort" : false
    })

  $('.save').click(function() {
            $.post('{{ route("create.store") }}', {
                        "_token": "{{ csrf_token() }}",
                        category_id: $('.category_id').val(),
                        office_id: $('.office_id').val(),
                        contact_name: $('.contact_name').val(),
                        directory_no: $('.directory_no').val(),
                        contact_no: $('.contact_no').val(),
                        type: $('.type').val(),
                        email: $('.email').val(),
                        
                    })
                    .done(function (response) {
                        $.notify("Done", "success");
                        $('#myModal').modal('hide')
                        setTimeout( function()
                        {
                            location.reload();
                        }, 500);
                }).fail(function (response) {
                    var errors = _.map(response.responseJSON.errors)
                        $.notify(errors[0], "error");
                });
        })

        $(document).on('click', '.edit', function() {
            var id = $(this).data('id')
            console.log(id);
            $('#editModal').modal('show');

            $.post('/create/edit_directory', {
               "_token": "{{ csrf_token() }}",
               id: id
            })
            .done(function (response) {
                $('.ids').val(id)
                $('.category_ids').val(response.category_id)
                $('.office_ids').val(response.office_id)
                $('.contact_names').val(response.contact_name)
                $('.directory_nos').val(response.directory_no)
                $('.contact_nos').val(response.contact_no)
                $('.types').val(response.type)
                $('.emails').val(response.email)
                

            })

          })
          $('.save_edit').click(function(){

$.post('{{ route("update_directory")}}', {
            "_token": "{{ csrf_token() }}",
            id: $('input[name=ids').val(),
            category_id: $('.category_ids').val(),
            office_id: $('.office_ids').val(),
            contact_name: $('.contact_names').val(),
            directory_no: $('.directory_nos').val(),
            contact_no: $('.contact_nos').val(),
            type: $('.types').val(),
            email: $('.emails').val(),
        })
        .done(function (response) {
            $('#editModal').modal('hide');
            $.notify("Update Success", "success");
            setTimeout( function()
            {
                location.reload();
            }, 500);
            
        }).fail(function (response) {
        var errors = _.map(response.responseJSON.errors)
            $.notify(errors[0], "error");
    });
})

        $(document).on('click', '.delete', function() {
            var id = $(this).data('id')

            Swal.fire({
                title: 'Are you sure?',
                // text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.value) {
                    $('input[name=id').val(id)
                        $.post('{{ route("delete_directory") }}', {
                        "_token": "{{ csrf_token() }}",
                    id: id
                    })
                    .done(function (response) {})
                    setTimeout( function()
                        {
                            location.reload();
                        }, 2000)
                    Swal.fire(
                    'Deleted!',
                    'Your data has been deleted.',
                    'success',
                    
                    )
                }
            })

        })

      
</script>
@endsection