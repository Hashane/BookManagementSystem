@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4">Welcome, {{ Auth::user()->name }}</h1>
    <p>This is the Admin Dashboard.</p>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card" style="height: 100%;">
                <div class="card-body">
                    <h5 class="card-title">Manage Books</h5>
                    <p class="card-text">View, Edit, and Delete Books.</p>
                    <a href="{{ route('staff.books') }}" class="btn btn-primary">Go to Book Management</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="height: 100%;">
                <div class="card-body">
                    <h5 class="card-title">Manage Users</h5>
                    <p class="card-text">Activate or Inactivate Staff/Reader Users.</p>
                    <a href="{{ route('staff.manage-users') }}" class="btn btn-primary">Go to User Management</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="height: 100%;">
                <div class="card-body">
                    <h5 class="card-title">Assign Books</h5>
                    <p class="card-text">Assign Books to Readers.</p>
                    <a href="{{ route('staff.assign-books') }}" class="btn btn-primary">Assign Books</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card" style="height: 100%;">
                <div class="card-body">
                    <h5 class="card-title">Borrowed Books</h5>
                    <p class="card-text">View Borrowed Books.</p>
                    <a href="{{ route('staff.borrowed-books') }}" class="btn btn-primary">View Borrowed Books</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card" style="height: 100%;">
                <div class="card-body">
                    <h5 class="card-title">Borrowing History</h5>
                    <p class "card-text">View Previous Borrowing History.</p>
                    <a href="{{ route('staff.borrowing-history') }}" class="btn btn-primary">View Borrowing History</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection