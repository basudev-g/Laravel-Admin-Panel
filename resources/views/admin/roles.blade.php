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
                        <a href="roles.html" class="btn btn-sm btn-outline-primary float-end"><i class="fas fa-plus-circle"></i> Add</a>
                        <a href="{{ URL::previous() }}" class="btn btn-sm btn-outline-info float-end me-1"><i class="fas fa-angle-left"></i> <span class="btn-header">Return</span></a>
                    </h3>
                </div>
                <div class="box box-primary">
                    <div class="box-body">
                        <table width="100%" class="table table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Role Name</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Administrator</td>
                                    <td>Active</td>
                                    <td class="text-end">
                                        <a href="permissions.html" class="btn btn-outline-secondary btn-rounded"><i class="fas fa-toggle-on"></i></a>
                                        <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                        <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Manager</td>
                                    <td>Active</td>
                                    <td class="text-end">
                                        <a href="permissions.html" class="btn btn-outline-secondary btn-rounded"><i class="fas fa-toggle-on"></i></a>
                                        <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                        <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Writer</td>
                                    <td>Active</td>
                                    <td class="text-end">
                                        <a href="permissions.html" class="btn btn-outline-secondary btn-rounded"><i class="fas fa-toggle-on"></i></a>
                                        <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                        <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Editor</td>
                                    <td>Disabled</td>
                                    <td class="text-end">
                                        <a href="permissions.html" class="btn btn-outline-secondary btn-rounded"><i class="fas fa-toggle-on"></i></a>
                                        <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                        <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Audit</td>
                                    <td>Active</td>
                                    <td class="text-end">
                                        <a href="permissions.html" class="btn btn-outline-secondary btn-rounded"><i class="fas fa-toggle-on"></i></a>
                                        <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                        <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Contributor</td>
                                    <td>Active</td>
                                    <td class="text-end">
                                        <a href="permissions.html" class="btn btn-outline-secondary btn-rounded"><i class="fas fa-toggle-on"></i></a>
                                        <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                        <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Author</td>
                                    <td>Active</td>
                                    <td class="text-end">
                                        <a href="permissions.html" class="btn btn-outline-secondary btn-rounded"><i class="fas fa-toggle-on"></i></a>
                                        <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                        <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection