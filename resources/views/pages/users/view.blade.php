@extends('master')
@section('title', ucfirst('users'))
@section('usersActive', 'active')
@section('style')
    <link rel="stylesheet" href="{{ asset('dashboard') }}/demos/vendors/dataTable/datatables.min.css" type="text/css">


@endSection
@section('content')
    <div class="content" style="overflow">
        <div class="p-2">
            <a href="{{ route('user.create') }}" class="btn btn-success">
                <i class="ti-settings mr-1"></i> New User
            </a>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="user-list" class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="user-list-select-all">
                                                <label class="custom-control-label" for="user-list-select-all"></label>
                                            </div>
                                        </th>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $key = 1;
                                    @endphp
                                    @foreach ($data as $item)
                                        <tr>
                                            <td></td>
                                            <td>{{ $key++ }}</td>
                                            <td>
                                                <a href="#">
                                                    @if ($item->image)
                                                        <figure class="avatar avatar-sm mr-2">
                                                            <img src="{{ asset('storage/' . $item->image) }}"
                                                                class="rounded-circle" alt="avatar">
                                                        </figure>
                                                    @endif
                                                </a>
                                            </td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>
                                                <div class="d-flex align-items-center">

                                                    <a href="{{ route('user.edit', $item->id) }}"
                                                        class="text-secondary mr-2" data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-edit" style="font-size:20px;"></i>
                                                    </a>
                                                    <form action="{{ route('user.destroy', $item->id) }}" method="POST"
                                                        onsubmit="return confirm('Are you sure you want to delete this user?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline-white"
                                                            data-toggle="tooltip" title="Delete">
                                                            <i class="fa fa-trash-o" style="font-size:25px;color:red"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script data-cfasync="false"
        src="{{ asset('dashboard') }}/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('dashboard') }}/demos/vendors/bundle.js"></script>
    <!-- Datatable -->
    <script src="{{ asset('dashboard') }}/demos/vendors/dataTable/datatables.min.js"></script>
    <script src="{{ asset('dashboard') }}/demos/assets/js/examples/pages/user-list.js"></script>
@endSection
