<!DOCTYPE html>
<html lang="en">
<head>
    <title> Manage </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .active{
            background-color: gainsboro;
        }
    </style>
    @yield('css')
    {{--<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">--}}
</head>
<body>
<div style="height:52px;margin: 10px 0 45px 50px;background-color:ghostwhite" >
    <ul class="nav navbar-nav" style="font-size: 16px;color: brown">
        <li class="{{Request::is('admin/news') ? 'active' : '' }}" style="color: blue   "><a href="{{url('admin/news')}}" >Content Manage</a></li>
        <li class="{{Request::is('admin/users') ? 'active' : '' }}"><a href="{{url('admin/users')}}" >User Manage</a></li>
        <li class="{{Request::is('admin/category') ? 'active' : '' }}"><a href="{{url('admin/category')}}">Category Manage</a></li>
        <li class="{{Request::is('admin/profile') ? 'active' : '' }}"><a href="{{url('admin/profile')}}">Setting</a></li>
        {{--<li><a href="#">Menu 3</a></li>--}}
    </ul>
    @if(Auth::guest())
        <button type="button" class="btn signin" id="myBtn" >Sign in</button>
    @else
        <a class="btn-success btn signin" href="{{url('index/logout')}}" style="float:right;margin-top: 10px;margin-right: 30px">Log out</a>
    @endif
    <br>
</div>
@yield('content')


</body>
{{--<script src="{{asset('js/jquery.min.js')}}"></script>--}}
{{--<script src="{{asset('js/bootstrap.min.js')}}"></script>--}}
@yield('style')


</html>