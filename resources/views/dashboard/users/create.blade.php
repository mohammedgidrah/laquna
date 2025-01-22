@extends('dashboard.main')

@section('content')
    {{-- <div class="container"> --}}
    <div class="page-inner"  style="padding-top:  75px" >
        <div class="page-header">
            <h3 class="fw-bold mb-3">Create User</h3>
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
                    <a href={{ route('users.index') }}>Users</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href={{ route('users.create') }}>Create</a>
                </li>
            </ul>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">  name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        
                    @enderror
 
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
 

                    <!-- Create and Back Buttons -->
                    <div class="d-flex gap-3 justify-content-start mt-4">
                        <button type="submit" class="btn btn-primary">Create User</button>
                        <a href="{{ route('users.index') }}" class="btn btn-secondary">Back to Users</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('dashboard.includes.footer')
    </div>
@endsection
