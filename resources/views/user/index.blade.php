@extends('layouts.app')
@section('content')

    <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header"><h4 style="float: left">Users</h4>
                            <a href="" data-bs-toggle="modal" data-bs-target="#addNewUser" style="float: right;" class="btn btn-dark">
                                <i class="fa fa-plus"></i>Add New User</a></div>
                          <div class="card-body">

                                                {{--index table --}}
                              <table class="table table-bordered table-left">
                                  <thead>
                                      <tr>
                                          <th>No</th>
                                          <th>Name</th>
                                          <th>Email</th>
                                          <th>Roles</th>
                                          <th width="280px">Action</th>
                                        </tr>
                                  </thead>

                                  @foreach ($users as $key => $user)
                                  <tbody>
                                      <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                          <td>
                                            @if(!empty($user->getRoleNames()))
                                              @foreach($user->getRoleNames() as $v)
                                                 <label class="badge badge-success">{{ $v }}</label>
                                              @endforeach
                                            @endif
                                          </td>
                                          <td>
                                            <a class="btn btn-primary" href="" data-bs-toggle="modal" data-bs-target="#editUser{{$user->id}}"><i class="fas fa-edit "></i> Edit</a>
                                                <div class="modal right fade" id="editUser{{$user->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                         <div class="modal-header">
                                                            <h4 class="modal-title" id="staticBackdropLabel">Edit User</h4>
                                                            <button type="button" class="btn-close"
                                                             data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                                                        </div>
                                                        <div class="modal-body">
                                                            @include('user.includes.editUser')
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <a class="btn btn-danger" href="" data-bs-toggle="modal" data-bs-target="#deleteUser{{$user->id}}"><i class="fas fa-trash "></i> Delete</a>
                                                <div class="modal right fade" id="deleteUser{{$user->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="staticBackdropLabel">Delete User</h4>
                                                                <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{route('user.destroy', $user->id)}}" method="post">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <p>Are you sure you want to delete {{ $user->name}}?</p>

                                                                    <div class="modal-footer">
                                                                        <button  type="button" class="btn btn-default" data-bs-dismiss="modal">Cancel</button>
                                                                        <button type="submit"  class="btn btn-danger" >Submit</button>

                                                                    </div>
                                                                </form>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>


                                             {{-- {!! Form::open(['method' => 'DELETE','route' => ['user.destroy', $user->id],'style'=>'display:inline']) !!}
                                                <button class="btn btn-danger" ><i class="fa fa-trash"></i>Delete</button>
                                             {!! Form::close() !!} --}}
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
                        <div class="card-header"><h4>Search User</h4></div>
                        <div class="card-body">
                                ----
                        </div>
                    </div>
                </div>
            </div>
    </div>



        {{-- modal for adding new user --}}

        <div class="modal right fade" id="addNewUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                     <div class="modal-header">
                        <h4 class="modal-title" id="staticBackdropLabel">Add User</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @include('user.includes.addUser')
                    </div>

                </div>
            </div>
        </div>

        {{-- modal for editing user --}}



                    {{-- styling for adding user --}}
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
