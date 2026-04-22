@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/contact.css') }}">

<style>
/* ================= GET INVOLVED PAGE ================= */

.involved-container{
    max-width:700px;
    margin:60px auto;
    background:white;
    padding:40px;
    border-radius:10px;
    box-shadow:0px 0px 10px rgba(0,0,0,0.1);
}

.involved-title{
    text-align:center;
    margin-bottom:30px;
    color:#6a11cb;
    font-size:28px;
}

.involved-container input,
.involved-container textarea{
    width:100%;
    padding:12px;
    margin-bottom:15px;
    border:1px solid #ccc;
    border-radius:5px;
}

.involved-container textarea{
    height:120px;
    resize:none;
}

.involved-container button{
    width:100%;
    padding:12px;
    background:#6a11cb;
    color:white;
    border:none;
    border-radius:5px;
    font-size:16px;
    cursor:pointer;
}

.involved-container button:hover{
    background:#4a0fa3;
}

/* ALERTS */
.success{
    background:#d4edda;
    color:#155724;
    padding:10px;
    border-radius:5px;
    margin-bottom:15px;
}

.error{
    background:#f8d7da;
    color:#721c24;
    padding:10px;
    border-radius:5px;
    margin-bottom:15px;
}
</style>

<div class="involved-container">

    <h2 class="involved-title">Get Involved / Volunteer</h2>

    <!-- SUCCESS -->
    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <!-- ERRORS -->
    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- FORM -->
    <form action="{{ route('involved.store') }}" method="POST">
        @csrf

        <input type="text" name="name" placeholder="Your Name" value="{{ old('name') }}" required>

        <input type="email" name="email" placeholder="Your Email" value="{{ old('email') }}" required>

        <input type="text" name="phone" placeholder="Phone Number" value="{{ old('phone') }}" required>

        <textarea name="message" placeholder="Why do you want to volunteer?" required>{{ old('message') }}</textarea>

        <button type="submit">Submit</button>
    </form>

</div>

@endsection