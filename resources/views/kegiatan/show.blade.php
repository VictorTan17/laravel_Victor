@extends('layout')
@section('isi')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Rincian Kegiatan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('kegiatan.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>nama:</strong>
                {{ $kegiatan->nama }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>tanggal:</strong>
                {{ $kegiatan->tanggal }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>jam:</strong>
                {{ $kegiatan->jam }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>deskripsi:</strong>
                {{ $kegiatan->deskripsi }}
            </div>
        </div>
    </div>
@endsection