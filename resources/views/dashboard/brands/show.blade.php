@extends('dashboard.main')

@section('content')

<div class="page-inner">
    <div class="page-header">
        <h3 class="fw-bold mb-3">Brand Image Management</h3>
        <ul class="breadcrumbs mb-3">
            <li class="nav-home">
                <a href="{{ route('dashboard') }}">
                    <i class="icon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="icon-arrow-right"></i>
            </li>
            <li class="nav-item">
                <a href="{{ route('brands.index') }}">Brands</a>
            </li>
        </ul>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Upload Brand Images
                        <a href="{{ route('brands.index') }}" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    <h5>
                        Brand Name: {{ $brand->name }}
                    </h5>
                    <hr>
                    @if ($errors->any())
                        <ul class="alert alert-warning">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <form action="{{ route('brandimage.upload', $brand->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="images">Upload Images</label>
                            <input type="file" class="form-control" name="images[]" multiple>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-12 mt-4">
            <h5>Uploaded Brand Images:</h5>
            <div class="row">
                @foreach ($multiplebrandimages as $brandimg)
                    <div class="col-md-3">
                        <div class="image-card text-center">
                            <img class="border p-2 m-3" src="{{ asset('storage/' . $brandimg->image_path) }}" alt="img"
                                 style="width: 250px; height: 250px"/>
                            <div class="d-flex justify-content-center mt-2">
                                <!-- Delete Button -->
                                <form action="{{ route('brandimage.delete', ['brandId' => $brand->id, 'imageId' => $brandimg->id]) }}" method="POST" class="me-2">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                                
                                <!-- Set as Main Image Button -->
                                @if ($brand->main_image === $brandimg->image_path)
                                    <span class="badge bg-success align-self-center">Main Image</span>
                                @else
                                    <form action="{{ route('brands.setMainImage', $brand->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="image_id" value="{{ $brandimg->id }}">
                                        <button type="submit" class="btn btn-primary btn-sm">Set as Main</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
