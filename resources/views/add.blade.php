@extends('layouts.app1')

@section('content')




<div class="row py-4">
<div class="col-md-12 d-flex justify-content-center ">
    <form action="{{ route('add1') }}" method="POST">           
@csrf

<div class="card">
<div class="col-md-12 justify-content-center">

        <div class="card-header"><h2> Add Office</h2>
            <div class="col-md-6">
                <button type="submit" class="btn btn-block btn-danger"><i class="fa fa-plus" aria-hidden="true"></i></button>
            </div>
        <label class="font-weight-bold"> Office Name </label>
        <input type="text" name="office" class="form-control" placeholder="office">
        
        <select class="form-control" name="category_id">
            
            <option value="" style=""> Select Office</option>
            <option value="1">Provincial</option>
            <option value="2">Municipal</option>
            <option value="3">National Agency</option>
            <option value="4">Municipal Elected Officials</option>
        </select>


    <div class="col-md-6 py-1">
        <a href="create" class="btn btn-block btn-secondary" style="color: chocos">Back</a>
    </div>
</div>
  
</div>
    </form>
</div>
</div>
</div>







@endsection