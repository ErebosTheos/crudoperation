@extends('info.layout')
  
@section('content')
<div>
    <div>
        <div>
            <h2>Add New Product</h2>
        </div>
        <div>
            <a href="{{ route('info.index') }}"> Back</a>
        </div>
    </div>
</div>
<style>
    strong{
        margin-right: 10%;
        margin-left: 2%;
    } 
    </style>
<form action="{{ route('info.store') }}" method="POST">
    @csrf
  
     <div>
        <div>
            <div>
                <strong>Name: </strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="name" placeholder="Name">
            </div>
        </div>
        <div>
            <div>
                <strong>address: </strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="address" placeholder="address">
            </div>
        </div>
        <div>
            <div>
                <strong>Email: </strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="email" placeholder="Email">
            </div>
        </div>
        <div>
            <div>
                <strong>Phone Number:</strong>
                <input type="text" name="phone_no" placeholder="Phone Number">
            </div>
        </div>
        <div>
                <button type="submit" style="margin-left:12%;">Submit</button>
        </div>
    </div>
   
</form>
@endsection