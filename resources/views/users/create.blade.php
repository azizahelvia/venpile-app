@extends('layouts.app')

<?php 
    $page = "Data Users";
?>

@section('content')
    <!-- Heading --->
    <h1 class="h3 mb-2 text-gray-800 mb-4">Add Users</h1>

    <!-- Table Users -->
    <div class="card mb-4">
        <div class="card-body">
            <form action="{{ route('data_users.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    autocomplete="off">

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    autocomplete="off">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Password Confirmation</label>
                    <input type="password" class="form-control" name="password_confirmation">
                </div>
                <div class="form-group">
                    <label>Position</label>
                    <select class="form-control @error('role_id') is-invalid @enderror" name="role_id">
                        <option value="">Pilih Opsi</option>
                        <option value="1">Owner</option>
                        <option value="2">Staff</option>
                    </select>

                    @error('role_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success float-right">Save</button>
                    <a href="{{ route('data_users.index') }}" class="btn btn-secondary float-right" style="margin-right: 1rem">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection