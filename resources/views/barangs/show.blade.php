@extends('barangs.layout')

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show barang</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('barangs.index') }}"> Back</a>

            </div>

        </div>

    </div>

   

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nama Barang :</strong>

                {{ $barang->nama }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>ID Distributor :</strong>

                {{ $barang->id_distributor }}

            </div>

        </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Keterangan :</strong>

                {{ $barang->keterangan }}

            </div>

        </div>

    </div>

@endsection