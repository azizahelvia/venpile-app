@extends('layouts.app')

<?php 
    $page = "Data Items";
?>

@section('content')
    <!-- Heading --->
    <h1 class="h3 mb-2 text-gray-800 mb-4">Table Items</h1>

    <!-- Table Items -->
    <div class="card shadow mb-4">
        <div class="border-bottom-info card-header shadow">                            
            <h5 class="m-0 font-weight-bold">List Of Data Items</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover mt-3 text-center" id="dataTable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Items</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($inventories as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->price }}</td>
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