@extends('layouts.app')

@section('content')

    <h2 class="text-warning text-center p-2">Davao de Oro Capitol Office Directory</h2> 
    
<div class="row-py-5">
   

    <div class="col-md-2 p-2">
        <a href="create" class="btn btn-block btn-success"> <i class="fa fa-plus" aria-hidden="true"></i> Add Directory</a>
    </div>

    
    <table class="table table-sm table-dark bg-secondary table-dark">
        <thead> 
            <tr class="text-justify p-2">
                
                <th>Directories</th>
                <th>Contact Name</th>
                <th>Other Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($directories as $directory)
            <tr class="text-left">
                <td>{{$directory->directory_no}}</td>
                <td>{{$directory->contact_name}}</td>
                <td>{{$directory->type}}</td>
            </tr>
            @endforeach   
            
        </tbody>
        
    </table>
        <div class="col-md-1 p-1">
       <a href="/" class="btn btn-block btn-primary"> Back</a>
        </div>
</div>

   
@endsection