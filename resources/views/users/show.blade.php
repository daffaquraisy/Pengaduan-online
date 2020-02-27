@extends('layouts.global')
@section('title') Detail user @endsection
@section('content')

<div class="col-md-8">
    <div class="card">
        <div class="card-body">
            <b>Name:</b> <br />
            {{$user->name}}

            <br><br>

            <b>Username:</b><br>
            {{$user->email}}

            <br>
            <br>

            <b>Nomor Telepon</b> <br>
            {{$user->no_telp}}


            <br>
            <br>

            <b>Roles:</b> <br>
            @foreach (json_decode($user->roles) as $role)
            &middot; {{$role}} <br>
            @endforeach
        </div>
    </div>
</div>

@endsection
