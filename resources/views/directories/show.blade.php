@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/dataTables/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{ asset('css/dataTables/responsive.bootstrap4.min.css')}}">
@endsection

@section('content')
 
    <h2 class="text-warning text-center p-2">Office Directory</h2> 
    
<div class="row-py-5">
    <table class="table table-striped bg-light dt-responsive nowrap" id="table_directory">
        <thead> 
            <tr class="text-justify p-2"> 
                <th>Contact Name</th>
                <th>Intercom</th>
                <th>Cellphone No</th>
                <th>Landline No</th>
                <th>Email</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($directories as $directory)
            <tr class="text-left">
                <td>{{$directory->contact_name}}</td>
                <td>{{$directory->directory_no}}</td>
                <td>{{$directory->contact_no}}</td>
                <td>{{$directory->type}}</td>
                <td>{{$directory->email}}</>
            </tr>
            @endforeach   
            
        </tbody>      
    </table>

        <div class="col-md-1 p-1">
            <a href="#" class="btn btn-block" style="background-color:#211401; color:white" onclick="goBack()"> Back</a>
        </div>
</div>
@endsection

@section('scripts')
<script src="{{asset('js/dataTables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/dataTables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('js/dataTables/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('js/dataTables/jquery.dataTables.min.js')}}"></script>
    
<script>

    $(document).ready(function () {
        $('#table_directory').dataTable({
            searching:false,
            paging:false,
            info:false,
            "bSort" : false
        })
    })

</script>
@endsection