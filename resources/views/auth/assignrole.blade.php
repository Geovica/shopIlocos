@extends('layouts.app') 
@section('content')
<div class="container">


    <form action="{{ action('RoleUserController@update', $roles->id) }}" method="POST">
        @csrf

        <div class="row">


            <div class="col-8">
                <h1>{{$roles->role_name}}</h1>
                <select class="form-control m-2" id="user" name="user" required>
                    <option selected="false" disabled="disabled">Choose...</option>
                   @foreach ($users as $user )  
            <option value="{{$user->id}}">
                        {{$user->name}} 
                    </option>
                   @endforeach
                  </select>

            </div>

        </div>

        <div class="row">
            @method('PUT')
            <div class="col">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Assign</button>

            </div>
        </div>
    </form>

    <div class="row">
        <div class="col">


            <table>
                <tr>
                    <th>User ID</th>
                    <th>Username</th>
                    <th>Role</th>
                </tr>

            </table>
        </div>

    </div>


</div>


</div>
@endsection