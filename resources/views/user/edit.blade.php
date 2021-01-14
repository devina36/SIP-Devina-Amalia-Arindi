@extends('main')

@section('title', 'User')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>User</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">User</a></li>
                    <li class="active">Edit</i></li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Edit User</strong>
                </div>
                <div class="pull-right">
                    <a href="{{url('user')}}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <form action="{{url('user/'.$user->id)}}" method="post">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <label>Role</label>
                                <select class="form-control" name="role_id" required>
                                    <option <?php if( $user->role_id=='1'){echo "selected"; } ?> value='1'>1</option>
                                    <option <?php if( $user->role_id=='2'){echo "selected"; } ?> value='2'>2</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" value="{{$user->name}}" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" value="{{$user->username}}" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" value="{{$user->email}}" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="password" value="{{$user->password}}" class="form-control" autofocus required>
                            </div>
                            <button type="submit" class="btn btn-success"> Save </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

</div>
@endsection