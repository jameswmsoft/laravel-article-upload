@extends('Admin.index')

@section('css')

    {{--<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">--}}
    {{--<link href="/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">--}}
    {{--<link href="/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">--}}
    <link href="/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    {{--<link href="/assets/global/plugins/uniform/css/uniform.default.css" rel=    "stylesheet" type="text/css">--}}
    {{--<link href="/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>--}}
    {{--<link rel="stylesheet" type="text/css" href="/assets/global/plugins/select2/select2.css"/>--}}
    <link rel="stylesheet" type="text/css" href="/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>

    <link href="/assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
    {{--<link href="/assets/admin/layout4/css/layout.css" rel="stylesheet" type="text/css"/>--}}
    {{--<link id="style_color" href="/assets/admin/layout4/css/themes/light.css" rel="stylesheet" type="text/css"/>--}}
    <link href="/assets/admin/layout4/css/custom.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->
{{--    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">--}}
{{--    <link href="{{asset('css/admin.css')}}" rel="stylesheet" type="text/css"/>--}}

    <link rel="shortcut icon" href="favicon.ico"/>
@stop

@section('content')
<div class="row">
    <div class="container">
        <div class="col-md-12">

            <div class="portlet box grey-cascade">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-globe"></i>Contents Manage
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="btn-group">
                                    <a id="sample_editable_1_new" class="btn green " href="{{url('/admin/news/add')}}">
                                        Add New <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                            </div>
                        </div>
                    </div>

                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                        <thead>
                        <tr>
                            {{--<th class="table-checkbox">--}}
                            {{--<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes"/>--}}
                            {{--</th>--}}
                            <th style="width: 3%">
                                No
                            </th>
                            <th style="width: 6%">
                                Title
                            </th>
                            <th style="width: 15%">
                                Image
                            </th>
                            <th style="width: 54%">
                                Content
                            </th>
                            <th style="width: 7%">
                                Category
                            </th>
                            <th style="width: 15%">
                                Actions
                            </th>

                        </tr>
                        </thead>

                        <tbody>
                        <?php $i=1 ?>
                        @foreach($datas as $data)
                            <tr class="odd gradeX">
                                {{--<td>--}}
                                {{--<input type="checkbox" class="checkboxes" value="1"/>--}}
                                {{--</td>--}}
                                <td>
                                    {{$i}}
                                </td>
                                <td>
                                    {{$data->title}}
                                </td>
                                <td>
                                    @if($data->extension == 'png' || $data->extension =='jpg' || $data->extension =='jpeg' || $data->extension =='gif' || $data->extension == 'PNG' || $data->extension =='JPG' || $data->extension =='JPEG' || $data->extension =='GIF')
                                    <div>
                                            <img src="{{url('download')}}/{{$data->image}}" style="width: 130px;" >
                                        </div>
                                    @elseif($data->extension == "mp4" || $data->extension == "flv" || $data->extension == "mpeg" || $data->extension == "avi" || $data->extension == "mp3" || $data->extension == "mov" || $data->extension == "MP4" || $data->extension == "FLV" || $data->extension == "MPEG" || $data->extension == "AVI" || $data->extension == "MP3")
                                        <div class="margin-bottom-50" style="width: 120px">
                                            <div class="embed-responsive embed-responsive-16by9 thumbnail">
                                                <video style="width: 100%" controls>
                                                    <source src="{{url('download')}}/{{$data->image}}" type="video/mp4">
                                                    Your browser does not support the audio element.
                                                </video>
                                            </div>
                                        </div>
                                    @else

                                    @endif


                                </td>
                                <td>
                                    {!! $data->content !!}
                                </td>
                                <td>
                                    {{$data->category}}
                                </td>
                                <td class="center" style="width: 15%">
                                    <a href="{{url('admin/news/edit')}}{{'/'.$data->id}}" class="btn btn-primary" type="button">Edit</a>
                                    <button class="btn btn-danger contentDelete" type="button" onclick="contentDel({{$data->id}})">Delete</button>
                                </td>
                            </tr>
                            <?php $i=$i+1 ?>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
<input type="hidden" name="_token" value="{{csrf_token()}}">
</div>
@stop

@section('style')
<script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>

<script src="{{asset('js/admin.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<script src="/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
{{--<script src="/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>--}}
<script src="/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
{{--<script src="/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>--}}
{{--<script src="/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>--}}
{{--<script src="/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>--}}
{{--<script src="/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>--}}
{{--<script src="/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>--}}
<script type="text/javascript" src="/assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<script src="/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="/assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="/assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="/assets/admin/pages/scripts/table-managed.js"></script>
<script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Demo.init(); // init demo features
        TableManaged.init();
    });
</script>
@stop
