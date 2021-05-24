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
       .printme {
            display: none;
        }
        @media print {
            .no-printme  {
                display: none;
            }
            .printme  {
                display: block;
            }
        }
        div.ex3 {
            background-color: lightblue;
            width: auto;
            height: 800px;
            overflow: auto;
        }
    </style>
    </head>
    <body style="background-color:#6e4904" onload="{window.print()}">
    <main class="container ">
        <h2 class="text-warning text-center">Provincial Capitol of Davao de Oro Directory</h2> 
        
        <div class="row d-flex center-content-center printme ex3"> 
            <table class="table table-sm table-bordered bg-info table-primary"  >
                <thead> 
                    <tr class="text-left">
                        <th>Office</th>
                        <th>Name</th>
                        <th>Directories</th>
                        <th>Landline</th>
                        <th>Email</th>

                    </tr>
                </thead>
                <tbody>
                   @foreach ($directories as $directory)
                       <tr class="text-justify">
                           <td>{{$directory->office}}</td>
                           <td>{{$directory->directory_no}}</td>
                           <td>{{$directory->contact_name}}</td>
                           <td>{{$directory->type}}</td>
                           <td>{{$directory->email}}</td>
                           
                       </tr>
                   @endforeach
                     
                </tbody>
            </table>
        </div>
            <div class="col-md-1 no-printme">

                <a href="/" class="btn btn-block btn-primary"> Back</a>
            </div>
    </main>
   
    <script language="javascript" type="text/javascript">
    function PrintElem(elem)
    {
        var mywindow = window.open('', 'PRINT', 'height=400,width=600');

        mywindow.document.write('<html><head><title>' + document.title  + '</title>');
        mywindow.document.write('</head><body >');
        mywindow.document.write('<h1>' + document.title  + '</h1>');
        mywindow.document.write(document.getElementById(elem).innerHTML);
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10*/

        mywindow.print();
        mywindow.close();

        return true;
    }
    </script>
    </body>
</html>