@extends('Admin.index')

@section('css')

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

@stop


@section('content')

<div class="container">
    <h1 style="margin-left: 20%;margin-bottom: 50px">My profile</h1>

    <form class="form-horizontal" method="post" action="{{url('admin/profile/save')}}">

        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <div class="form-group" style="margin-bottom: 40px">
            <label class="col-sm-2 control-label">FullName</label>
            <div class="col-sm-9">
                <input class="form-control" id="focusedInput" type="text" name="fullname" value="{{$data->fullname}}" autofocus>
            </div>
        </div>

        <div class="form-group has-success has-feedback" style="margin-bottom: 40px">
            <label class="col-sm-2 control-label" for="inputSuccess">Email</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="inputSuccess" name="email" value="{{$data->email}}">
            </div>
        </div>
        <div class="form-group has-warning has-feedback" style="margin-bottom: 40px">
            <label class="col-sm-2 control-label" for="inputWarning">Address</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="inputWarning" name="address" value="{{$data->address}}">

            </div>
        </div>
        <div class="form-group has-error has-feedback" style="margin-bottom: 40px">
            <label class="col-sm-2 control-label" for="inputError">Username</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="inputError" name="username" value="{{$data->username}}">
            </div>
        </div>
        <div class="form-group has-success has-feedback" style="margin-bottom: 40px">
            <label class="col-sm-2 control-label" for="inputSuccess">Password</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="inputSuccess" name="password" value="{{$data->password}}">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </div>
        <input type="hidden" value="{{$data->id}}" name="id">

    </form>
</div>

@stop


@section('style')

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

@stop