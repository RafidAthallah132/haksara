@extends('layouts.app')
    <link rel="stylesheet" href="{{ asset('quickadmin/css/utama.css') }}" >
@section('content')
<div class="col-2" style="margin-left: 63px;">
    <a href="/profile"><button class="btn btn-primary btn-lg active" >Kembali</button></a>
</div>
<div class="card" style="margin: 40px;padding:20px;">
    <div class="card-body">
        <div class="row">
        
        <p style="font-size: 30px;font-family: Poppins;padding-bottom: 10px;" class="card-title col-sm-9">Edit your profile</P>

            {{-- <div class="col-sm-2">
            <a href="/profile"><button class="btn btn-primary btn-lg active" >Back to profile</button></a>
            </div> --}}
        </div>
            @if ($errors->any())
    <div class="alert alert-danger" >
        <ul style="list-style: none;padding-bottom: 10px;" >
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

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
    <button type="submit" class="btn btn-primary btn-lg active" >Update Profile</button>

</form>
    </div>
</div>
@endsection