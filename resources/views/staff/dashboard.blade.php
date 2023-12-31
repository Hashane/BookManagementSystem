@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4">Welcome, {{ Auth::user()->name }}</h1>
    <p>This is the dashboard for {{ Auth::user()->hasRole('admin') ? 'Admin' : (Auth::user()->hasRole('editor') ?
        'Editor' : 'Viewer') }}.</p>

    <div class="row mt-4">
        <div class="col-md-10">
            @include('layouts.cards')
        </div>
    </div>
</div>
@endsection