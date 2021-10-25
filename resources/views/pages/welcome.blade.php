@extends('layouts.app')

@section('content')

<div class="">
    <div class="col-md-12">
        <div class="row d-flex justify-content-center ">
            <h1 class="p-3 mb-2 bg-transparent text-warning">Davao de Oro Directory</h1>  
        </div>
            
        <div class="col-md-12"> 
            <div class="row d-flex justify-content-center">
                @foreach($category as $category)
                    <div class="col-md-4 mt-2 px-2">
                        <a href="/directories/{{$category->id}}" class="btn btn-block"  style="background-color:#f7c865;font-size:18px;color:rgb(17, 17, 17)">{{ $category->category }}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection