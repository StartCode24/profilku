@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron" >
        <div class="text-center">
            <h1>Web Service TheMovie</h1>
            <p>Crud</p>
        </div>

        <router-view></router-view>
    </div>
</div>
@endsection
