@extends('admin.layout')
@section('content')
<div class="wrapper">
    @include('admin.includes.sidebar')
    <div id="body" class="active">
        @include('admin.includes.navbar')
        <div class="content">
            <div class="container">
                <div class="page-title">
                    <h3>User Roles
                        <button type="button" class="btn btn-sm btn-outline-primary float-end" data-bs-toggle="modal" data-bs-target="#roleModal"><i class="fas fa-plus-circle"></i> Add</button>
                        <a href="{{ route('admin-users') }}" class="btn btn-sm btn-outline-info float-end me-1"><i class="fas fa-angle-left"></i> <span class="btn-header">Return</span></a>
                    </h3>
                </div>
                <div class="box box-primary">
                    <div class="box-body">
                        <table width="100%" class="table table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Role Name</th>
                                    <th>Guard Name</th>
                                    <!-- <th>Status</th> -->
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($roles as $role)
                                <tr>
                                    <td>{{ ucfirst($role->name) }}</td>
                                    <td>{{ $role->guard_name }}</td>
                                    <!-- <td>Active</td> -->
                                    <td class="text-end">
                                        <a href="{{route('admin-permissions')}}" class="btn btn-outline-secondary btn-rounded"><i class="fas fa-toggle-on"></i></a>
                                        <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                        <form action="{{route('role.destroy', $role->id)}}" method="post" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                                        </form>
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

<div class="modal fade" id="roleModal" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fas fa-plus-circle"></i> Add Role</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-start">
                <p>Please fill up this form.</p>
                <form accept-charset="utf-8" action="{{route('role.store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Role</label>
                        <input type="text" name="name" placeholder="Enter Role Name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="guard" class="form-label">Guard</label>
                        <input type="text" name="guard" disabled placeholder="Enter Guard Name" value="web" class="form-control" readonly >
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="assets/js/form-validator.js"></script>
@endsection