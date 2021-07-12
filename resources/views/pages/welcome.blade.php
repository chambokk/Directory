@extends('layouts.app')

@section('content')

<div class="">
    <div class="col-md-12">
        <div class="row d-flex justify-content-center ">
            <h1 class="p-3 mb-2 bg-transparent text-warning">Davao de Oro Directory</h1>  
        </div>
            
        <div class="col-md-12"> 
            <div class="row d-flex justify-content-center">

                <div class="col-md-3 px-2">
                    <a href="/directories/1" class="btn btn-block floating-button"  style="background-color:#f7c865;font-size:18px">Provincial Capitol </a>
                </div>

                <div class="col-md-3 px-2">
                    <a href="/directories/2" class="btn btn-block floating-button" style="background-color:#f7c865;font-size:18px">National Agency</a>
                </div>

                <div class="col-md-3 px-2">
                    <a href="/directories/3" class="btn btn-block floating-button" style="background-color:#f7c865;font-size:18px">Municipal</a>
                </div>
            </div>
        </div>
    </div>
@endsection