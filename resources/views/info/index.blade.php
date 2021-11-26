@extends('info.layout')
 
@section('content')
    <div>
        <div>
            <div>
                <h2>index page</h2>
            </div>
            <div>
                <a href="{{ route('info.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   <style>
       th{
           border:1px solid black;
           margin-left:20px;
           
       }
   </style>
    <table style="border:1px solid black;">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>address</th>
            <th>email</th>
            <th>phone no</th>
            <th>Action</th>
        </tr>
        @foreach ($info as $inf)
        <tr style="boder:1px solid black;">
            <td>{{ $inf->id }}</td>
            <td>{{ $inf->name }}</td>
            <td>{{ $inf->address }}</td>
            <td>{{ $inf->email }}</td>
            <td>{{ $inf->phone_no }}</td>
            <td>
                <form action="{{ route('info.destroy',$inf->id) }}" method="POST">
   
                    <a class="btn btn-primary" href="{{ route('info.edit',$inf->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button class="btn btn-warning" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

      
@endsection