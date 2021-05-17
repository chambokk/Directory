@extends('layouts.app1')

@section('content')
<div class="row py-4">
    <h2 class="">Add Directories</h2> 
    
    <div class="col-md-12 d-flex justify-content-center ">
        <form action="{{ route('store') }}" method="POST">
            
            @csrf
            
            <div class="col md-4 form-group"> 
                <label class="font-weight-bold"> Office Name </label>
                <select class="form-control" name="office_id">
                    <option disabled selected="true">choose office</option>
                    @foreach($office as $offices)
                    <option value="{{ $offices->id }}">{{ $offices->office }}</option>
                    @endforeach
                </select>
                
                <label class="font-weight-bold"> Directory No. </label>
                <input type="text" name="directory_no" class="form-control" placeholder="no.">   
                
                <label class="font-weight-bold"> Contact Name </label>           
                <input type="text" name="contact_name" class="form-control" placeholder="name">   
                
                <label class="font-weight-bold"> Type </label>
                <input type="text" name="type" class="form-control" placeholder="type">    
                
                <div class="col-md-4 p-1">
                    <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Add </button>
                </div>jj
                
                <div class="col-md-4 p-1">
                    <a href="/" class="btn btn-block btn-secondary"> Back</a>
                </div>
            
            </div>
    
</div>
   </form>
    
@endsection