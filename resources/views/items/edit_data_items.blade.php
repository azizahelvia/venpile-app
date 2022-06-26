@extends('layouts.app')

<?php 
    $page = "Manage Items";
?>

@section('content')
    <!-- Heading --->
    <h1 class="h3 mb-2 text-gray-800 mb-4">Add Items</h1>

    <!-- Table Items -->
    <div class="card mb-4">
        <div class="card-body">
            <form action="{{ route('data_items.update', $inventory->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Name</label>
                    <input name="name" id="name" type="text" class="form-control
                        @error('name') is-invalid @enderror" value="{{ old('name', $inventory->name) }}"
                        placeholder="Enter Name Item" autocomplete="off">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Price</label>
                    <input name="price" id="price" type="number" class="form-control
                        @error('price') is-invalid @enderror" value="{{ old('price', $inventory->price) }}"
                        placeholder="Enter Price Item" min="0">

                    @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success float-right">Edit</button>
                    <a href="{{ route('data_items.manageitems') }}" class="btn btn-secondary float-right" style="margin-right: 1rem">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection