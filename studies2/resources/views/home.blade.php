@extends('layouts.main_layout')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-6">
            <form action="{{ route('submit')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label mb-1">Username:</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label mb-1">Password:</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="mb-3">
                    <button class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>

</div>

@php
    $valor = 100;
@endphp

<h3 class="">{{$valor}}</h3>

@endsection
