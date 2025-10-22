@extends('app')
<<<<<<< HEAD
 
@section('content')
<div>
        @if ($errors->any())
            <div style="color: red;">
                {{ $errors->first() }}
            </div>
        @else
            <div style="color: green;">
                {{ session('success') }}
            </div>
        @endif
    </div>
=======

@section('content')
>>>>>>> origin/main
    <h1>Welcome to Home page</h1>
@endsection