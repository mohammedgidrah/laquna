@extends('dashboard.main')

@section('content')

<div class="page-inner">
    <div class="page-header">
        <h3 class="fw-bold mb-3">Brand Management</h3>
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
        </ul>
    </div>
</div>

<div class="table-responsive p-3" style="border-radius: 10px">
    @if ($brands->isNotEmpty())
    <table id="add-row" class="display table table-striped table-hover">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Launched At</th>
                <th>Description</th>
                <th> category </th>

                <th style="width: 10%">Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Launched At</th>
                <th>Description</th>
                <th> category </th>
                <th style="width: 10%">Action</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($brands as $brand)
            <tr>
                <td>
                    <a href="{{url('brandimage/'.$brand->id.'/upload') }}" class="btn btn-info">add images</a>
                </td>
                <td>{{ $brand->name }}</td>
                <td>{{ $brand->lunched_at }}</td>
                <td>{{ Str::limit($brand->description, 50) }}</td>
                <td>{{ $brand->category->name }}</td>
                <td>
                    <div class="form-button-action d-flex justify-content-start">
                        <a href="{{ route('brands.edit', $brand->id) }}" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Brand">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $brand->id }}" class="btn btn-link btn-danger btn-lg" data-original-title="Delete Brand">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </td>
            </tr>

            <!-- Delete Confirmation Modal -->
            <div class="modal fade" id="deleteModal{{ $brand->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $brand->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel{{ $brand->id }}">Delete Brand</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to delete this brand?</p>
                        </div>
                        <div class="modal-footer">
                            <form id="delete-form-{{ $brand->id }}" action="{{ route('brands.destroy', $brand->id) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $brand->id }}').submit();">
                                Delete
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </tbody>
    </table>
    @else
    <div class="alert alert-warning text-center" role="alert">
        No brands found.
    </div>
    @endif
    @include('dashboard.includes.footer')
</div>
@endsection
