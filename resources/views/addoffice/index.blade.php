@extends('layouts.app2')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/dataTables/datatables.min.css')}}">
<link rel="stylesheet" href="{{ asset('css/dataTables/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{ asset('css/dataTables/responsive.bootstrap4.min.css')}}">
@endsection

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
                </div>
                     </div>
            
        </div>
        {{-- </div> --}}

        <div class="card">
            <div class="table-responsive">
            <table class="table table-striped dt-responsive" id="table_directory">
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
                        <td><button data-id="{{$offices->id}}" class="btn btn-danger btn-sm edit"><i class="fas fa-edit"></i></button>
                            
                    </tr>    
                    @empty
                    <td colspan="3">
                        no record found
                    </td>
                    @endforelse
                </tbody>
            </table>
        {{-- {{$office->links()}}  --}}
        </div>
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
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->category}}</option>
                    @endforeach
                </select>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary save">Add</button>
                  </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Office</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>
            <div class="col-md-12">
            <label class="font-weight-bold"> Office </label>           
                  <input type="text" class="form-control office_ids" placeholder="office">
                
                  <h5 class="modal-title" id="exampleModalLabel">Category</h5>
                  <select class="form-control category_ids" name="category_id">
            
                    <option value="" style=""> Select Category</option>
                    <option value="1">Provincial Capitol Office</option>
                    <option value="2">National Agencies</option>
                    <option value="3">Municipal LGU's</option>
                </select>

                <input type="hidden" name="ids" class="ids">


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

{{-- <script src="{{asset('js/dataTables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/dataTables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('js/dataTables/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('js/dataTables/jquery.dataTables.min.js')}}"></script> --}}

<script>
    $(function () {
    $('.add').click(function(){
         $('#myModal').modal('show')
     })

  })

  $('#table_directory').DataTable({
      responsive:true
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

        $(document).on('click', '.edit', function() {
            var id = $(this).data('id')
            console.log(id);
            $('#editModal').modal('show');

            $.post('/addoffice/edit_office', {
               "_token": "{{ csrf_token() }}",
               id: id
            })
            .done(function (response) {
                $('.ids').val(id)
                $('.office_ids').val(response.office)
                $('.category_ids').val(response.category_id)
                

            })

          });    
          
          $('.save_edit').click(function(){

            $.post('{{ route("update_office")}}', {
                "_token": "{{ csrf_token() }}",
                id: $('input[name=ids').val(),
                office_id: $('.office_ids').val(),
                category_id: $('.category_ids').val(),
                
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
         
</script>

<script>
    $('#directory').change(function(e){
        console.log(e);
    })
</script>
@endsection

