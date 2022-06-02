@extends('layouts.app')
    <link rel="stylesheet" href="{{ asset('quickadmin/css/utama.css') }}" >
@section('content')
<div class="card" style="margin: 40px;padding:20px;">
    <div class="card-body">
        <p style="font-size: 30px;font-family: Poppins;padding-bottom: 10px;" class="card-title text-center">Edit your profile</P>
 <form action="{{ route('doneedit') }}" method="POST" value="PATCH">
    @csrf
    @method('PUT')

    <div class="form-group">

        <input type="hidden" name="id" value="{{ $data-> id}}">


    <!-- Nama -->
    <table class="table table-bordered">
        <tr>
            <td class="col-md-1"><label for="name">Name</label> </td>
    <td> <input type="text" class="form-control" name="name" value="{{ $data-> name}}" id="name"></td>
        </tr>   
   
           
    </div>

    <!-- Description -->
    <div class="form-group">
      
            <tr>
                <td class="col-md-1"> <label for="description">Description</label> </td> 
       <td> <input type="text" class="form-control" name="description" value="{{ $data -> description}}" id="description"></td>
            </tr>
        </table>
    </div>

    <!-- Submit -->
    <button type="submit" class="btn btn-primary btn-lg active" >Update</button>

</form>
    </div>
</div>
@endsection