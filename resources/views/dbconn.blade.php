@extends('layouts/app')

@section('content')
    <div class="container pt-80">
        <?php
        if (DB::connection()->getPdo()) {
            echo 'Successfully connected to the database and DB name is ' . DB::connection()->getDatabaseName();
        }
        ?>

    </div>
@endsection
