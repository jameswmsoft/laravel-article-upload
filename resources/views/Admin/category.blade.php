
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet box blue">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-edit"></i>Category Manage
                                </div>

                            </div>
                            <div class="portlet-body">
                                <div class="table-toolbar">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="btn-group">
                                                <button id="sample_editable_1_new" class="btn green">
                                                    Add New <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-6">

                                        </div>
                                    </div>
                                </div>
                                <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                    <thead>
                                    <tr>
                                        <th style="width: 30px">
                                            No
                                        </th>
                                        <th style="display: none"></th>
                                        <th>
                                            Category Name
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
                                    @foreach($datas as $data)
                                        <tr>
                                            <td>
                                                {{$i}}
                                            </td>
                                            <td style="display: none;">{{$data->id}}</td>
                                            <td>
                                                {{$data->category}}
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
                                        <input type="hidden" value="{{$data->id}}"/>
                                        <?php $i=$i+1 ?>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
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
    <script src="{{asset('js/category_edit_table.js')}}" type="text/javascript"></script>


    <script type="text/javascript" src="/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="/assets/global/scripts/metronic.js" type="text/javascript"></script>
    <script src="/assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
    <script src="/assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
    {{--<script src="/assets/admin/pages/scripts/table-editable.js"></script>--}}
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