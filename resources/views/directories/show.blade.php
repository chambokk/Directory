@extends('layouts.app')

@section('content')

    <h2 class="text-warning text-center p-2">Davao de Oro Capitol Office Directory</h2> 
    
 <table class="table table-sm table-dark bg-secondary table-dark">
     <thead> 
         <tr class="text-justify p-2">
             <th>Office</th>
             <th>Directories</th>
             <th>Contact Name</th>
             <th>Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($directories as $directory)
            <tr class="text-left">
                <td>{{$directory->office_id}}</td>
                <td>{{$directory->directory_no}}</td>
                <td>{{$directory->contact_name}}</td>
                <td>{{$directory->type}}</td>
            </tr>
            @endforeach   
           
        </tbody>
    </table>
    </form>
@endsection