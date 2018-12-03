
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Manage </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{asset('assets/plugins/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/plugins/bootstrap-responsive.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/plugins/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/plugins/style-metro.css')}}" rel="stylesheet" type="text/css"/>
    {{--<link href="{{asset('assets/plugins/style-responsive.css')}}" rel="stylesheet" type="text/css"/>--}}
    {{--<link href="{{asset('assets/plugins/bootstrap-fileinput.css')}}" rel="stylesheet" type="text/css" />--}}
    <link href="{{asset('css/fileinput.css')}}" media="all" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/plugins/style.css')}}" rel="stylesheet" type="text/css"/>
    {{--<link rel="stylesheet" href="/css/style.css">--}}
    <link href="{{asset('css/admin.css')}}" rel="stylesheet" type="text/css"/>

    <link rel="shortcut icon" href="favicon.ico" />

    {{--<link rel="stylesheet" href="/css/fileinput/bootstrap.min.css">--}}
    {{--<link rel="stylesheet" href="/css/fileinput/bootstrap-colorpicker.min.css">--}}

    {{--<link rel="stylesheet" href="/css/fileinput/jquery.mCustomScrollbar.min.css">--}}

    {{--<link href="/css/fileinput/fileinput.css" media="all" rel="stylesheet" type="text/css">--}}
    {{--<link rel="stylesheet" href="/css/fileinput/colorbox.css">--}}
    {{--<link rel="stylesheet" href="/css/fileinput/style.css">--}}

</head>
<body>
<div style="height:52px;margin: 10px 0 45px 50px;background-color:ghostwhite;padding-top: 15px" >
    <span style=" margin:15px; color:#5b9bd1;font-size: 20px">Edit Content</span>
    <br>
</div>

    <div class="page-container row-fluid">

        <div class="container">

            <div class="span12">
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <div class="caption">Edit Content</div>

                    </div>
                    <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <form action="" class="form-horizontal" method="post">

                            <input name="_token" type="hidden" value="{{csrf_token()}}">

                            <div class="form-group ">

                                <div  style="margin-left:32%;margin-right:32%;margin-top: 15px;margin-bottom: 15px">
                                    <form enctype="multipart/form-data">
                                        <div class="form-group">
                                            {{--<div class="file-preview-frame imageimage">--}}
                                                {{--<img src="/download/{{$data->image}}">--}}
                                        {{--</div>--}}
                                            <input id="file-1" type="file" class="file" name="file" multiple=true data-preview-file-type="any">
                                        </div>

                                    </form>

                                </div>

                                <div class="control-group">
                                    <label class="control-label">Title</label>
                                    <div class="controls">
                                        <input type="text" class="span10 m-wrap" name="title" value="{{$data->title}}">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Category</label>
                                    <div class="controls">
                                        <select class="span10 m-wrap" data-placeholder="Choose a Category" tabindex="1">

                                            @foreach($categories as $category)
                                                <option value="{{$category->category}}" @if($category->category == $data->category) selected @endif >{{$category->category}}</option>
                                            @endforeach

                                            {{--<option value="Category 4">Category 4</option>--}}
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Content</label>
                                    <div class="controls">
                                        {{--<textarea class="span10 m-wrap" rows="5" name="content" val="">{{$data->content}}</textarea>--}}
                                        <textarea class="tinymce_editor" id="tinymce_editor">{!! $data->content !!}</textarea>
                                        <input type="hidden" name="phone_editor_type" value="html">
                                    </div>
                                </div>
                                <div class="imgimg"></div>
                                <input type="hidden" name="id" value="{{$data->id}}">
                                <input type="hidden" name="image" value="{{$data->image}}">

                                <div class="form-actions">
                                    <button type="button" class="btn blue updatesubmit">Submit</button>
                                    <a type="button" href="{{url('admin/news')}}" class="btn" >Cancel</a>
                                </div>
                            </div>
                        </form>
                        <!-- END FORM-->
                    </div>
                </div>
                <!-- END SAMPLE FORM PORTLET-->
            </div>

        </div>

    </div>

</body>
    <script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/admin.js')}}" type="text/javascript"></script>

    <script src="{{asset('js/jquery.nailthumb.1.0.min.js')}}" type="text/javascript"></script>

    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>--}}
    {{--<script src="https://cdn.jsdelivr.net/jquery.nailthumb/1.1/jquery.nailthumb.min.js"></script>--}}
    <script src="{{asset('js/fileinput.min.js')}}"></script>
    {{--<script src="/assets/plugins/bootstrap-fileinput.js" type="text/javascript"></script>--}}
    {{--<script src="/assets/global/plugins/jquery.min.js" type="text/javascript"></script>--}}
    {{--<script src="/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>--}}
    {{--<script src="/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>--}}
    {{--<script src="/assets/global/plugins/plupload/js/jquery.ui.plupload/jquery.ui.plupload.js" type="text/javascript"></script>--}}

    <script src="/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>

    <script src="/tinymce/tinymce.min.js"></script>

    <script>
        $(document).ready(function() {
            tinymce.init({
                selector: 'textarea.tinymce_editor',

                height: 250,
                width: 800,
                content_css: './css/content.css',
                theme: 'modern',
                plugins: [
                    'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
                    'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                    'save table contextmenu directionality emoticons template paste textcolor'
                ],
                // plugins: 'print preview fullpage powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount tinymcespellchecker a11ychecker imagetools mediaembed  linkchecker contextmenu colorpicker textpattern help',

                // plugins: 'code',
                image_advtab: true,
                toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
                templates: [
                    { title: 'Test template 1', content: 'Test 1' },
                    { title: 'Test template 2', content: 'Test 2' }
                ],
            });
        });
    </script>

</html>