<!DOCTYPE html>
<html>
<head>
    <title>DistributorForm</title>
    <style type="text/css">
    html,body{
        padding: 0;
        margin: 0;
        background: linear-gradient(lightskyblue, lightgreen);
        background-size: cover;
        background-repeat: no-repeat;
        height: 100%;
    }
        .atas{
            height: 65px;
            width: 1447px;
            margin-left: -200px;
            background: transparent;
            border-bottom: 2px solid white;
            background-size: cover;
            background-repeat: no-repeat;
            margin-top: -20px;
        }
        ul{
            list-style-type: none;
        }
        ul > li{
            float: left;
            margin-top: 20px;
            margin-left: 65px;
        }
        ul > li > a{
            margin-right: -10px;
            color: #ffffff;
            text-decoration: none;
            font-size: 16px;
        }
        ul > li > a:hover{
            color: #ffffff;
            background: gray;
            padding: 15px 20px;
            text-decoration: none;
            border-bottom-right-radius: 50%;
            border-top-left-radius: 50%;
        }
    </style>
</head>
<body>

@extends('distributors.layout')
 
@section('content')
<div class="atas">
    <ul>    
        <li style="margin-left: 1050px;"><a href="../barangs">Barang</a></li>
        <li><a href="../distributors">Distributor</a></li>
        <li><a href="../home">Back</a></li>
    </ul>
    </div><br>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                 <h2 style="color: gold; margin-top: -70px; margin-left: -50px;">Form Pasokan Distributor</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('distributors.create') }}"> Create New distributor</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>ID Distributor</th>
            <th>Nama Distributor</th>
            <th width="280px">Aksi</th>
        </tr>
        @foreach ($distributors as $distributor)
        <tr>
            <td>{{ $distributor->id }}</td>
            <td>{{ $distributor->name }}</td>
            <td>
                <form action="{{ route('distributors.destroy',$distributor->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('distributors.show',$distributor->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('distributors.edit',$distributor->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $distributors->links() !!}
      
@endsection
</body>
</html>