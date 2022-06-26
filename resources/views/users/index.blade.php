@extends('layouts.app')

<?php 
    $page = "Data Users";
?>

@section('content')
    <!-- Heading --->
    <h1 class="h3 mb-2 text-gray-800 mb-4">Table Users</h1>

    <!-- Table Users -->
    <div class="card shadow mb-4">
        <div class="border-bottom-info card-header shadow">                            
            <a href="{{ route('data_users.create') }}" class="d-none d-sm-inline-block btn btn-md btn-primary shadow-md">
                <i class="fa-solid fa-plus fa-md text-white-50"></i>
                Add Users
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->role->name }}</td>
                                <td>
                                    <form action="{{ route('data_users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Do You Want To Delete User {{ $user->name }}?')">
                                        @method('DELETE')
                                        @csrf
                                        <!-- Button View -->
                                        <button type="button" class="btn btn-info btn-md mr-2" title="Detail"
                                        data-toggle="modal" data-target="#edit-{{ $user->id }}">
                                            <i class="fa-solid fa-eye"></i>
                                        </button>
                                        <!-- End of Button View -->
                                        
                                        <!-- Modal View -->
                                        <div class="modal fade" id="edit-{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Detail User {{ $user->name }}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="modal-body text-left">
                                                    <div class="form-group">
                                                        <label>Nama</label>
                                                        <input type="text" class="form-control" name="name" value="{{ $user->name }}" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control" name="email" value="{{ $user->email }}" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Role</label>
                                                        <input type="text" class="form-control" name="role_id" value="{{ $user->role->name }}" readonly>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <!-- End of Modal View -->

                                        <!-- Edit Button -->
                                        <a href="{{ route('data_users.edit', $user->id) }}" class="btn btn-warning btn-md mr-2" title="Edit">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <!-- End Of Edit Button -->

                                        <!-- Delete Button -->
                                        <button type="submit" class="btn btn-danger btn-md" title="Delete">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                        <!-- End Of Delete Button -->
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection