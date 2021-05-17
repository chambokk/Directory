<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <style>
      tr > td{
           width:auto;
           text-align: center;
       }
       tr > th {
           width: auto
       }
    </style>
    </head>
    <body style="background-color:#6e4904" id="print">
    <main class="container ">
        <h2 class="text-warning text-center">Provincial Capitol of Davao de Oro Directory</h2> 
        
        <div class="row d-flex center-content-center"> 
            <table class="table table-sm table-bordered bg-info table-primary"  >
                <thead> 
                    <tr class="text-left">
                        <th>Office</th>
                        <th>Directories</th>
                        <th>Contact Name</th>
                        <th>Other Name</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($directories as $directory)
                       <tr class="text-justify">
                           <td>{{$directory->office}}</td>
                           <td>{{$directory->directory_no}}</td>
                           <td>{{$directory->contact_name}}</td>
                           <td>{{$directory->type}}</td>
                       </tr>
                   @endforeach
                     
                </tbody>
            </table>
        </div>
            <div class="col-md-1">
                {{$directories->links()}}

                <a href="/" class="btn btn-block btn-primary"> Back</a>
            </div>
    </main>
   

    </body>
</html>