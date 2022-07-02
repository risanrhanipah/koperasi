<!DOCTYPE html>
<html>
<head>
    <title>DashBoard</title>
    <style type="text/css">
        ul > li{
            list-style-type: none;
            float: left;
            margin-right: 60px;
        }
        ul > li > a:hover{
            background: lightskyblue;
            text-decoration: none;
        }
    </style>
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pilih Opsi</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul>
                        <li><a href="barangs">PasokanKoperasi</a></li>
                        <li><a href="siswas">Siswa</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>