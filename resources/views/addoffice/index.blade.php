@extends('layouts.app2')

@section('content')

<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2> Office</h2>

                    <div class="row">
                        <div class="col-md-2 col-1">
                        <button type="button" class="btn btn-primary add"> <i class="fas fa-plus"></i> Add</button>
                        </div>
                    <div>
                </div>
        </div>

        <div class="card">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Office</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
               
                <tbody>
                    @forelse ($office as $offices)
                    <tr>
                        <td>{{$offices->office}}</td> 
                        <td>{{$offices->category_id}}</td> 
                        <td><button data-id="{{$offices->id}}" class="btn btn-danger btn-sm delete"><i class="fas fa-trash"></i></button></td>        
                    </tr>
                        
                    @empty
                    <td colspan="3">
                        no record found
                    </td>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Office</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>
            <div class="col-md-12">
            <label class="font-weight-bold"> Office </label>           
                  <input type="text" class="form-control office" placeholder="office">
                
                  <h5 class="modal-title" id="exampleModalLabel">Category</h5>
                  <select class="form-control category_id" name="category_id">
            
                    <option value="" style=""> Select Category</option>
                    <option value="1">Provincial</option>
                    <option value="2">Municipal</option>
                    <option value="3">National Agency</option>
                </select>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary save">Add</button>
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

  $('.save').click(function() {
            $.post('{{ route("addoffice.store") }}', {
                        "_token": "{{ csrf_token() }}",
                        office: $('.office').val(),
                        category_id: $('.category_id').val(),
                        
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
                        $.post('{{ route("delete_office") }}', {
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