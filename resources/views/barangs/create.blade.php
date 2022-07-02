@extends('barangs.layout')

  

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Add New Barang</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('barangs.index') }}"> Back</a>

        </div>

    </div>

</div>

   

@if ($errors->any())

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

   

<form action="{{ route('barangs.store') }}" method="POST">

    @csrf

  

     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nama Barang :</strong>

                <input type="text" name="nama" class="form-control" placeholder="Name">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

               <select name="id_distributor" style="width: 100%;">
                <option value="" disabled selected>Pilih Distributor</option>
                     <?php 
                     $sql = mysqli_query (mysqli_connect('localhost','root',"",'db_koperasi'), "SELECT * FROM distributors");
                     while ($a = mysqli_fetch_array($sql)) { ?> 
                <option value="<?php echo $a ['id']?>"><?php echo $a['name']; ?></option>
                            <?php  } ?>             
               </select>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Keterangan :</strong>

                <input type="text" name="keterangan" class="form-control" placeholder="Name">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </div>

   

</form>

@endsection