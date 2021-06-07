@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/select2.min.css')}}">
    <style>
        .floating-button {
            
        }
        @media only screen and (max-width: 600px) {
            .floating-button {
                border-radius: 100px;
                height: 60px;
                width: 60px;
                font-size: 24pt;
                position: fixed;
                bottom: 0;
                right: 0;
                margin: 30px
            }
        }
    </style>
@endsection

@section('content')
<div class="">
    <div class="col-md-12">
        <div class="row d-flex justify-content-center ">

            <h1 class="text-warning">Provincial Capitol of Davao de Oro Directory</h1> 
        </div>
        <div class=" ">
            <form action="/show" method="POST">
                @csrf
                <div class="row">

                    <div class="col-md-12">
                        <div class="row  d-flex justify-content-center ">
                            <div class="col-md-6 col-12 mb-2">
                                <select name="office" class="form-control" id="office">
                                    <option value="" style=""> Select Office</option>
                                    @foreach ($offices as $itcdd)
                                        <option value="{{$itcdd->id}}">{{$itcdd->office}}</option>
                                     
                                        
                                    @endforeach 
                                    
                                </select>
                            </div>
                            
                            <div class="col-md-1 col-4 px-1">
                                <button type="submit" class="btn btn-block" style="background-color:#ffed4a"><i class="fa fa-search" aria-hidden="true"></i> </button>
                            </div>
                            
                            <div class="col-md-1 col-4 px-1">
                                <a href="/print" class="btn btn-block btn-success floating-button"><i class="fa fa-print"></i> </a>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/select2.min.js') }}"></script>

<script>
    $(document).ready(function () {
        $('#office').select2();
    })
</script>
@endsection