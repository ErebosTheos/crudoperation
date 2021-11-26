@extends('info.layout')
   
@section('content')
    <div>
        <div>
            <div>
                <h2>Edit info</h2>
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
    <form action="{{ route('info.update',$info->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
                <div style="display: flex;">
                    <strong>Name:</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="name" value="{{ $info->name }}" placeholder="Name">
                </div>
                <div>
                    <strong>Address:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="address" value="{{ $info->address }}" placeholder="Address">
                </div>
                <div>
                    <strong>Email: </strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="email" value="{{ $info->email }}" placeholder="Email">
                </div>
                <div>
                    <strong>Phone Number:</strong>
                    <input type="text" name="phone_no" value="{{ $info->phone_no }}" placeholder="Phone Number">
                </div>
        </div>
            <div style="margin-left:12%;">
              <button type="submit">Submit</button>
            </div>
        </div>
   
    </form>
@endsection