@extends('dashboard.main')

@section('content')
    {{-- <div class="page-inner" > --}}
        <div class="page-inner d-flex justify-content-start align-items-start" style="padding-top:  75px">
            <h3 class="fw-bold mb-3">Edit Brand</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="#">
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
                    <a href={{ route('brands.edit', $brand->id) }}>Edit Brand</a>
                </li>
            </ul>
        </div>

        <div class="row" style="padding:  10px   10px" >
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('brands.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT') <!-- Use PUT for update -->

                            <!-- Brand Name -->
                            <div class="form-group">
                                <label for="name">Brand Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $brand->name }}">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Launch Date -->
                            <div class="form-group">
                                <label for="lunched_at">Launch Date</label>
                                <input type="date" class="form-control" id="lunched_at" name="lunched_at" value="{{ $brand->lunched_at }}">
                                @error('lunched_at')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Description -->
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="4">{{ $brand->description }}</textarea>
                                @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Image -->
                            <div class="form-group">
                                <label for="image">Brand Image</label>
                                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                                @if($brand->image)
                                    <img src="{{ asset('storage/' . $brand->image) }}" alt="Brand Image" class="img-fluid mt-2" style="max-height: 150px;">
                                @endif
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Category -->
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select class="form-control" id="category_id" name="category_id">
                                    <option value="" disabled>Select a Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ $category->id == $brand->category_id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Buttons -->
                            <button type="submit" class="btn btn-primary">Update Brand</button>
                            <a href="{{ route('brands.index') }}" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('dashboard.includes.footer')
    </div>
@endsection
