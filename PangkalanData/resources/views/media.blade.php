{{-- if login by operator maka extend operator, kalo validator ya validator --}}
{{-- @extends(\Auth::check() ? 'layouts.adminPanel' : 'layouts.home') --}}

@extends('PARTIAL.indexV')

@section('content')

    <div class="content">
        <header>HALAMAN MEDIA</header>
    </div>

@include('PARTIAL.MenuMedia')

@endsection