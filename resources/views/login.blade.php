@extends('artworkLayout')

@section('head')
    <link rel="stylesheet" href="/css/admin.css">
    <title>Noé Terrier - Admin</title>
@endsection

@section('title')
    <div class="title">
        <i class="back-button"><a href="/portfolio"></a></i>
        <h1>//Login</h1>
    </div>
@endsection

@section('content')
    <div class="content">
        <div class="action-div" id="login">
            <div class="alert">
                <h4>
                    @if(session('message'))
                        {{session('message')}}
                    @endif
                </h4>
            </div>
            <form action="{{route("login")}}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="password-input">Password</label>
                <input type="password" name="password" id="password-input">
                <button type="submit"> Login </button>
            </form>
        </div>
    </div>
@endsection