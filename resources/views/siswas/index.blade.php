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

@extends('siswas.layout')
 
@section('content')
<div class="atas">
    <ul>    
        <li><a href="../home">Back</a></li>
    </ul>
    </div><br>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                 <h2 style="color: gold; margin-top: -70px; margin-left: -50px;">Form Pasokan Siswa</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('siswas.create') }}"> Create New Siswa</a>
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
            <th>id siswa</th>
            <th>Nama siswa</th>
            <th>Rayon</th>
            <th>Rombel</th>
            <th width="280px">Aksi</th>
        </tr>
        @foreach ($siswas as $siswa)
        <tr>
            <td>{{ $siswa->id }}</td>
            <td>{{ $siswa->nama }}</td>
            <td>{{ $siswa->rayon }}</td>
            <td>{{ $siswa->rombel }}</td>
            <td>
                <form action="{{ route('siswas.destroy',$siswa->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('siswas.show',$siswa->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('siswas.edit',$siswa->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $siswas->links() !!}
      
@endsection
</body>
</html>