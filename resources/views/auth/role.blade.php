@extends('layouts.app') 
@section('content')


<div class="container">

    <form action="{{route('roles.store')}}" method="POST">
        @Csrf
        <div class="form-group">
            <div class="row">
                <div class="col-3">
                    <lable>Add new Role</lable>
                    <input type="text" name="role_name" class="form-control">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-1">Submit</button>
        </div>
    </form>
    <div class="row">


        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Role</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Actions</th>
                </tr>
                @foreach ($roles as $role)
                <tr>
                    <td>{{$role->id}}</td>
                    <td>{{$role->role_name}}</td>
                    <td>{{$role->created_at}}</td>
                    <td>{{$role->updated_at}}</td>
                    <td> <a href="/role_users/{{$role->id}}" class="btn btn-sm btn-danger">Assign a User</a></td>
                </tr>
                @endforeach
        </table>

        <div class="row">
            <div class="col-sm">
                <h4>Buyers</h4>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Username</th>
                            <th>Role</th>
                            <th></th>
                        </tr>
                        @foreach ($admins as $admin )
                        <tr>
                        <td{{$admin->name}}</td>
                        </tr>

                        @endforeach

                    </thead>
                </table>
            </div>

            <div class="col">
                <h4>Sellers</h4>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Username</th>
                            <th>Role</th>
                            <th></th>

                        </tr>

                    </thead>
                </table>

            </div>

            <div class="col">
                <h4>Admin</h4>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Username</th>
                            <th>Role</th>
                            <th></th>

                        </tr>

                    </thead>
                </table>

            </div>
        </div>


    </div>
</div>

</div>
@endsection