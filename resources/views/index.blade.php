@extends('layout')
@section('isi')
<?php
$value = Session::get('email');
echo $value;
?>
@endsection