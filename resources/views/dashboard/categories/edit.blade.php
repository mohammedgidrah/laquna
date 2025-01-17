@extends('dashboard.main')

@section('content')
    {{-- <div class="page-inner" > --}}
        <div class="page-inner d-flex justify-content-start align-items-start" style="padding-top:  75px">
            <h3 class="fw-bold mb-3">Edit User</h3>
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
                    <a href={{ route('categories.index') }}>categories</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href={{ route('categories.edit', $categories->id) }}>Edit category</a>
                </li>
            </ul>
        </div>

        <div class="row" style="padding:  10px   10px" >
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('categories.update', $categories->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT') <!-- Use PUT for update -->

                            <div class="form-group">
                                <label for="name">First name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $categories->name }}">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

        

 
 

                            <button type="submit" class="btn btn-primary">Update category</button>
                            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('dashboard.includes.footer')
    </div>

 
@endsection
