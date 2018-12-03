
@extends('Admin.index')

@section('css')
    {{--<link href="/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">--}}
    {{--<link href="/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">--}}
    <link href="/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    {{--<link href="/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">--}}
    {{--<link href="/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>--}}
    {{--<!-- END GLOBAL MANDATORY STYLES -->--}}
    <!-- BEGIN PAGE LEVEL STYLES -->
    {{--<link rel="stylesheet" type="text/css" href="assets/global/plugins/select2/select2.css"/>--}}
    <link rel="stylesheet" type="text/css" href="/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="/assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
    {{--<link href="/assets/admin/layout4/css/layout.css" rel="stylesheet" type="text/css"/>--}}
    {{--<link id="style_color" href="/assets/admin/layout4/css/themes/light.css" rel="stylesheet" type="text/css"/>--}}
    <link href="/assets/admin/layout4/css/custom.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->
    <link href="{{asset('css/user_manage.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="favicon.ico"/>


@stop

@section('content')

<div class="container">

    <div>
        <div class="page-content">

            <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            Widget settings form goes here
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn blue">Save changes</button>
                            <button type="button" class="btn default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-edit"></i>User Manage
                            </div>

                        </div>
                        <div class="portlet-body">
                            {{--<div class="table-toolbar">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-md-6">--}}
                                        {{--<div class="btn-group">--}}
                                            {{--<button id="sample_editable_1_new" class="btn green">--}}
                                                {{--Add New <i class="fa fa-plus"></i>--}}
                                            {{--</button>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-6">--}}
                                        {{--<div class="btn-group pull-right">--}}
                                            {{--<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>--}}
                                            {{--</button>--}}
                                            {{--<ul class="dropdown-menu pull-right">--}}
                                                {{--<li>--}}
                                                    {{--<a href="javascript:;">--}}
                                                        {{--Print </a>--}}
                                                {{--</li>--}}
                                                {{--<li>--}}
                                                    {{--<a href="javascript:;">--}}
                                                        {{--Save as PDF </a>--}}
                                                {{--</li>--}}
                                                {{--<li>--}}
                                                    {{--<a href="javascript:;">--}}
                                                        {{--Export to Excel </a>--}}
                                                {{--</li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                <thead>
                                <tr>
                                    <th style="width: 30px">
                                        No
                                    </th>
                                    <th>
                                        Full Name
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Address
                                    </th>
                                    <th>
                                        Username
                                    </th>
                                    <th>
                                        Role
                                    </th>
                                    <th>
                                        Edit
                                    </th>
                                    <th>
                                        Delete
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=1 ?>
                                @foreach($users as $user)
                                <tr>
                                    <td>
                                        {{$i}}
                                    </td>
                                    <td>
                                        {{$user->fullname}}
                                    </td>
                                    <td>
                                        {{$user->email}}
                                    </td>
                                    <td class="center">
                                        {{$user->address}}
                                    </td>
                                    <td>
                                        {{$user->username}}
                                    </td>
                                    <td>
                                        {{$user->role}}
                                    </td>
                                    <td>
                                        <a class="edit" href="javascript:;">
                                            Edit </a>
                                    </td>
                                    <td>
                                        <a class="delete" href="javascript:;">
                                            Delete </a>
                                    </td>
                                </tr>
                                 <input type="hidden" value="{{$user->id}}"/>
                                <?php $i=$i+1 ?>
                                @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>
            <!-- END PAGE CONTENT -->
        </div>
    </div>

    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
</div>


@stop



@section('style')
<!--<script src="/assets/global/plugins/respond.min.js"></script>-->
{{--<script src="/assets/global/plugins/excanvas.min.js"></script>--}}
{{--<![endif]-->--}}
<script src="/assets/global/plugins/jquery.min.js" type="text/javascript"></script>


<script src="/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
{{--<script src="/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>--}}
{{--<script src="/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>--}}
{{--<script src="/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>--}}
<script src="/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{asset('js/admin.js')}}" type="text/javascript"></script>


<script type="text/javascript" src="/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="/assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="/assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="/assets/admin/pages/scripts/table-editable.js"></script>
<script type="text/javascript" src="/assets/global/plugins/select2/select2.min.js"></script>

<script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Demo.init(); // init demo features
        TableEditable.init();
    });
</script>

@stop