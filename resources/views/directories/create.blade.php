@extends('layouts.app2')

@section('content')

<div class="collapse navbar-collapse" id="navbarNavDropdown">
    
</div>


<div class="row py-4">
     <div class="card text-dark bg-warning w-100 border-dark mb-100"  style="max-width: 100rem;" >
    <div><h2 class="card-header">Add Directories</h2>
    </div>                

    {{-- <div class="col-md-4 p-1">
        <a href="/" class="btn btn-block btn-secondary"> Add</a>
    </div> --}}
    
    <div class="col-md-12 d-flex justify-content-center ">
    <form action="{{ route('store') }}" method="POST">
            
            @csrf
            
            <div class="col md-4 form-group"> 
               <div class="card-body">

               
                <label class="font-weight-bold"> Office Name </label>
                <select class="form-control" name="office_id">
                    {{-- <option disabled selected="true">choose office</option> --}}
                    <option value="" style=""> Select Office</option>
                    @foreach($office as $offices)
                    <option value="{{ $offices->id }}">{{ $offices->office }}</option>
                    @endforeach
                </select>

                
                <label class="font-weight-bold"> Contact Name </label>           
                <input type="text" name="contact_name" class="form-control" placeholder="name">   
                
                <label class="font-weight-bold"> Intercom Number </label>
                <input type="text" name="directory_no" class="form-control" placeholder="no.">   
                
                <label class="font-weight-bold"> Other Number </label>
                <input type="text" name="type" class="form-control" placeholder="type">

                <label class="font-weight-bold"> Contact Number </label>
                <input type="text" name="contact_no" class="form-control" placeholder="contact">  

                <label class="font-weight-bold"> Email </label>
                
                <input type="text" name="email" class="form-control" placeholder="email">  
               
                <div class="col-md-3 p-1">
                    <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Add </button>
                    <a href="/" class="btn btn-block btn-secondary" style="color: chocos">Back</a>
                </div>
                
                <div class="col-md-3 p-1">
                    
                </div>

            </div>
    
</div>
        </div>
    </div>
   </form>
    
@endsection