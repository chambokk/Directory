@extends('layouts.app')
@section('styles')

    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet">

@endsection
@section('content')

   <div class="row py-5">
       <div class="col-md-12 d-flex justify-content-center">

           <h2 class="text-warning ">Provincial Capitol of Davao de Oro Directory</h2> 
       </div>
        
        
        <div class="col-md-12 d-flex justify-content-center">
            <form action="/show" method="POST">
                @csrf
                <div class="row d-flex center-content-center">
                   
                    <div class="col-md-6">
                        <select name="office" class="form-control" id="office">
                            <option value=""> <p class="text-justify">Select Office</p></option>
                            @foreach ($offices as $itcdd)
                                <option value="{{$itcdd->id}}" >{{$itcdd->office}}</option>
                             
                                
                            @endforeach 
                            
                        </select>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-search" aria-hidden="true"></i> Search </button>
                    </div>
                   
                    <div class="col-md-4 p-2">
                        <a href="print" class="btn btn-block btn-info"> <i class="fa fa-print"></i> Print Directory</a>
                    </div>
                </div>
            
            </form>
        </div>
   </div>

@endsection

@section('scripts')
<script src="{{ asset('js/select2.min.js') }}"></script>
<script>
$(document).ready(function(){
    $('#office').select2();
})
</script>
@endsection
    