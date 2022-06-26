@extends('layouts.app')

<?php 
    $page = "Manage Items";
?>

@section('content')
    <!-- Heading --->
    <h1 class="h3 mb-2 text-gray-800 mb-4">Table Manage Items</h1>

    <!-- Table Items -->
    <div class="card shadow mb-4">
        <div class="border-bottom-info card-header shadow">                            
            <a href="{{ route('data_items.create') }}" class="d-none d-sm-inline-block btn btn-md btn-primary shadow-md">
                <i class="fa-solid fa-plus fa-md text-white-50"></i>
                Add Items
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Items</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($inventories as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->price }}</td>
                                <td>
                                    <form action={{ route('data_items.destroy', $item->id) }}"" method="POST" onsubmit="return confirm('Do You Want To Delete Data?')">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{ route('data_items.edit', $item->id) }}" class="btn btn-warning btn-md mr-2" title="Edit">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <button type="submit" class="btn btn-danger btn-md" title="Delete">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <h3>No Data</h3>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection