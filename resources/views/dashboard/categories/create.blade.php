@extends('dashboard.main')

@section('content')
    {{-- <div class="container"> --}}
    <div class="page-inner"  style="padding-top:  75px" >
        <div class="page-header">
            <h3 class="fw-bold mb-3">Create category </h3>
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
                    <a href={{ route('categories.index') }}>categories</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href={{ route('categories.create') }}>Create</a>
                </li>
            </ul>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">  name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        
                    @enderror
 
                    {{-- <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div> --}}
                    {{-- <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror --}}
                    {{-- <div class="form-group">
                        <label for="image">Profile Image</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                    </div>
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>
                    @error('phone')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                    </div>
                    @error('address')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="role">Role</label>
                        <select class="form-control" id="role" name="role" required>
                            <option value="" disabled selected>Select Role</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                    @error('role')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror --}}

                    <!-- Create and Back Buttons -->
                    <div class="d-flex gap-3 justify-content-start mt-4">
                        <button type="submit" class="btn btn-primary">Create User</button>
                        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back to categories</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('dashboard.includes.footer')
    </div>
@endsection
