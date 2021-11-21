@extends('layouts.app')
@section('content')


        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header"><h4 style="float:left">Roles</h4>
                            <a href="" data-bs-toggle="modal" data-bs-target="#createRole" style="float: right;" class="btn btn-dark">
                                <i class="fa fa-plus"></i>Add New Role</a></div>
                        <div class="card-body">

                                                {{--index table --}}
                            <table class="table table-bordered table-left">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th width="280px">Action</th>
                                        </tr>
                                </thead>

                                @foreach ($roles as $key => $role)
                                <tbody>
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td>
                                            <a class="btn btn-primary" href="" data-bs-toggle="modal" data-bs-target="#editRole{{$role->id}}"><i class="fas fa-edit "></i> Edit</a>
                                                <div class="modal right fade" id="editRole{{$role->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="staticBackdropLabel">Edit role</h4>
                                                                <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                                                            </div>
                                                            <div class="modal-body">
                                                                @include('role.includes.editRole')
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            {!! Form::open(['method' => 'DELETE','route' => ['role.destroy', $role->id],'style'=>'display:inline']) !!}
                                                <button class="btn btn-danger" ><i class="fa fa-trash"></i>Delete</button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card ">
                        <div class="card-header"><h4>Search Role</h4></div>
                        <div class="card-body">
                                ----
                        </div>
                    </div>
                </div>
            </div>
        </div>
                                {{-- modal for creating roles --}}

                        <div class="modal right fade" id="createRole" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="staticBackdropLabel">Add role</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        @include('role.includes.addrole')
                                    </div>

                                </div>
                            </div>
                        </div>

                                {{-- modal for editing roles --}}



            {{-- styling for adding role --}}
        <style>
            .modal.right .modal-dialog{
            /* position: absolute; */
            top: 0;
            left: 0;
            margin-right: 20vh;

            }
            .modal.fade:not(.in).right .modal-dialog{
                -webkit-transform: translate3d(25%, 0,0);
                transform: translate3d(25%,0,0);
            }

        </style>


@endsection
