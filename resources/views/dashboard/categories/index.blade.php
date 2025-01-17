@extends('dashboard.main')

@section('content')

<div class="page-inner">
    {{-- @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif --}}

    {{-- @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show bg-light" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif --}}

    <div class="page-header">
        <h3 class="fw-bold mb-3">category Management</h3>
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
        </ul>
    </div>
</div>




{{-- <div class="mb-3 ps-4 ">
    <form action="{{ route('users.index') }}" method="GET" class="d-flex justify-content-between align-items-center">
        <div>
            <select name="per_page" class="form-control" onchange="this.form.submit()">
                <option value="5" {{ request('per_page') == '5' ? 'selected' : '' }}>5</option>
                <option value="10" {{ request('per_page') == '10' ? 'selected' : '' }}>10</option>
                <option value="15" {{ request('per_page') == '15' ? 'selected' : '' }}>15</option>
                <option value="{{ $totalUsers }}" {{ request('per_page') == $totalUsers ? 'selected' : '' }}>All
                </option>
            </select>
        </div>
        <div>
            <select name="role" class="form-control" onchange="this.form.submit()">
                <option value="">All Roles</option>
                <option value="admin" {{ request('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="user" {{ request('role') == 'user' ? 'selected' : '' }}>User</option>
            </select>
        </div>
        <div class="d-flex align-items-center justify-content-between">
            <input type="text" name="search" placeholder="Search..." class="form-control"
                value="{{ request('search') }}">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>
</div> --}}

{{-- <div class="mb-3 ps-4">
    <h5>Total Users: {{ $totalUsers }}</h5>
</div> --}}

<div class="table-responsive p-3 "  style="border-radius: 10px">
    @if ($categories->isNotEmpty())
    <table id="add-row" class="display table table-striped table-hover">
        <thead>
                <tr>
                    {{-- <th>Image</th> --}}
                    <th> name</th>
                     {{-- <th>Email</th> --}}
 
                    <th style="width: 10%">Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    {{-- <th>Image</th> --}}
                    <th> name</th>
                     {{-- <th>Email</th> --}}
 
                    <th style="width: 10%">Action</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        {{-- <td>
                            <img src="{{ asset('storage/' . $user->image) }}"
                                style="width: 75px; height: auto; border-radius: 50%;">
                        </td> --}}
                        <td>{{ $category->name }}</td>
                         {{-- <td>{{ $category->email }}</td> --}}
 
                        <td>
                            <div class="form-button-action d-flex justify-content-start">
                                {{-- @if ($user->role !== 'admin') --}}
                                    <a href="{{ route('categories.edit', $category->id) }}"
                                        class="btn btn-link btn-primary btn-lg" data-original-title="Edit User">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="javascript:void(0);" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal{{ $category->id }}"
                                        class="btn btn-link btn-danger btn-lg" data-original-title="Delete User">
                                        <i class="fa fa-times"></i>
                                    </a>
                                {{-- @endif --}}
                            </div>
                        </td>
                    </tr>

                    <!-- Delete Confirmation Modal -->
                    <div class="modal fade" id="deleteModal{{ $category->id }}" tabindex="-1"
                        aria-labelledby="deleteModalLabel{{ $category->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel{{ $category->id }}">Delete category</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to delete this category?</p>
                                </div>
                                <div class="modal-footer">
                                    <form id="delete-form-{{ $category->id }}"
                                        action="{{ route('categories.destroy', $category->id) }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-danger"
                                        onclick="event.preventDefault(); document.getElementById('delete-form-{{ $category->id }}').submit();">
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
        {{-- <div class="d-flex justify-content-between align-items-center  p-4  ">
            {{ $users->appends(request()->query())->links('vendor.pagination.bootstrap-4') }}

            <div class="d-flex justify-content-end align-items-center">
                <a href="{{ route('users.create') }}" class="btn btn-primary me-2">
                    <i class="fa fa-plus"></i> Create User
                </a>
                <a href="{{ route('users.trashed') }}" class="btn btn-danger">
                    <i class="fa fa-trash"></i> View Trashed Users
                </a>
            </div>
        </div> --}}
    </div>
    @else
    <div class="alert alert-warning text-center" role="alert">
        No category found.
    </div>
    @endif
    @include('dashboard.includes.footer')
</div>
@endsection
