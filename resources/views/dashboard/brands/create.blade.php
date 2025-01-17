@extends('dashboard.main')

@section('content')
    <div class="page-inner" style="padding-top: 75px">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Create Brand</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href={{ route('dashboard') }}>
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href={{ route('brands.index') }}>Brands</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href={{ route('brands.create') }}>Create</a>
                </li>
            </ul>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('brands.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Brand Name -->
                    <div class="form-group">
                        <label for="name">Brand Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <!-- Launch Date -->
                    <div class="form-group mt-3">
                        <label for="lunched_at">Launch Date</label>
                        <input type="date" class="form-control" id="lunched_at" name="lunched_at" required>
                    </div>
                    @error('lunched_at')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <!-- Description -->
                    <div class="form-group mt-3">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                    </div>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <!-- Brand Logo -->
                    <div class="form-group mt-3">
                        <label for="image">Brand Logo</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                    </div>
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <!-- Category -->
                    <div class="form-group mt-3">
                        <label for="category_id">Category</label>
                        <select class="form-control" id="category_id" name="category_id" required>
                            <option value="" disabled selected>Select a Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('category_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <!-- Create and Back Buttons -->
                    <div class="d-flex gap-3 justify-content-start mt-4">
                        <button type="submit" class="btn btn-primary">Create Brand</button>
                        <a href="{{ route('brands.index') }}" class="btn btn-secondary">Back to Brands</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('dashboard.includes.footer')
@endsection
