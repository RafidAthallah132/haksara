@extends('layouts.app')
    <link rel="stylesheet" href="{{ asset('quickadmin/css/utama.css') }}" >
@section('content')
<p> Edit Your Profile </p>
 <form action="{{ route('doneedit') }}" method="POST" value="PATCH">
    @csrf
    @method('PUT')
    <div class="form-group">
        <input type="hidden" name="id" value="{{ $data-> id}}">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" value="{{ $data-> name}}" id="name">
    </div>
    <div class="form-group">
        <label for="description">description</label>
        <input type="text" class="form-control" name="description" value="{{ $data -> description}}" id="description">
    </div>
    <button type="submit" class="btn btn-success">Update</button>

</form>

@endsection