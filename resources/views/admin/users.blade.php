@extends('admin.layout')
@section('content')
<div class="wrapper">
    @include('admin.includes.sidebar')
    <div id="body" class="active">
        @include('admin.includes.navbar')
        <div class="content">
            <div class="container">
                <div class="page-title">
                    <h3>Users
                        <a href="{{ route('admin-roles') }}" class="btn btn-sm btn-outline-primary float-end"><i class="fas fa-user-shield"></i> Roles</a>
                    </h3>
                </div>
                <div class="box box-primary">
                    <div class="box-body">
                        <table width="100%" class="table table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @foreach($user->roles as $roles)
                                            {{ ucfirst($roles->name) }}
                                        @endforeach
                                    </td>
                                    <td>{{ $user->status == 1? "Active" : "Disabled" }}</td>
                                    <td class="text-end">
                                        <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                        <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
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
<script src="assets/vendor/datatables/datatables.min.js"></script>
<script src="assets/js/initiate-datatables.js"></script>
@endsection