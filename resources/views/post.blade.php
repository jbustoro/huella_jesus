@extends('layouts.master')

@section('content')
    <?php
    if($_POST) {
        echo "Bienvenido ". $_POST['username'];

        exit();
    }
    ?>
@endsection
