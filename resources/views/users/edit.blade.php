@extends('layouts.app')

<?php 
    $page = "Data Users";
?>

@section('content')
    <!-- Heading --->
    <h1 class="h3 mb-2 text-gray-800 mb-4">Edit Users</h1>

    <!-- Table Users -->
    <div class="card mb-4">
        <div class="card-body">
            <form action="{{ route('data_users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Name</label>
                    <input name="name" id="name" type="text" class="form-control
                        @error('name') is-invalid @enderror" value="{{ old('name', $user->name) }}"
                        autocomplete="off">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input name="email" id="email" type="email" class="form-control
                        @error('email') is-invalid @enderror" value="{{ old('email', $user->email) }}"
                        autocomplete="off">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Password</label>
                    <input name="password" id="password" type="password" class="form-control" 
                    placeholder="Leave blank if not changed, minimum 6 characters password">
                </div>
                <div class="form-group">
                    <label>Password Confirmation</label>
                    <input type="password" class="form-control" name="password_confirmation" 
                    placeholder="Leave blank if not changed, minimum 6 characters password">
                </div>
                <div class="form-group">
                    <label>Position</label>
                    <select class="form-control @error('role_id') is-invalid @enderror" name="role_id">
                        <option value="">Pilih Opsi</option>
                        <option value="1" {{ $user->role_id == "1" ? "selected" : "" }}>Owner</option>
                        <option value="2" {{ $user->role_id == "2" ? "selected" : "" }}>Staff</option>
                    </select>

                    @error('role_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success float-right">Edit</button>
                    <a href="{{ route('data_users.index') }}" class="btn btn-secondary float-right" style="margin-right: 1rem">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection