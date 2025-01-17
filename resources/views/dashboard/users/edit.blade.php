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
                    <a href={{ route('users.index') }}>Users</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href={{ route('users.edit', $user->id) }}>Edit User</a>
                </li>
            </ul>
        </div>

        <div class="row" style="padding:  10px   10px" >
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT') <!-- Use PUT for update -->

                            <div class="form-group">
                                <label for="name">First name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- <div class="form-group">
                                <label for="last_name">Last name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $users->last_name }}">
                                @error('last_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div> --}}

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
 

                            <button type="submit" class="btn btn-primary">Update User</button>
                            <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('dashboard.includes.footer')
    </div>

    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('newImagePreview');
                output.src = reader.result;
                output.style.display = 'block'; // Show the new image
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
