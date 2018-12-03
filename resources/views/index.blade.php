
<!DOCTYPE html>
<!-- saved from url=(0035)http://shortnews.bdfestival.com.au/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Short News</title>

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" sizes="192x192" href="/img/logo.png">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/public_custom.css')}}">
    <link rel="stylesheet" href="{{asset('css/detail.css')}}">
    <link href="/assets/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link href="/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    {{--<link href="/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>--}}
    <link href="/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    {{--<link href="/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>--}}
    <link href="/assets/admin/pages/css/login2.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>


</head>
<body>
<nav class="navbar navbar-default">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{url('index')}}"> <img src="/img/logo.png" height="50px" style="margin-top:-15px;"></a>
        </div>

    </div>
    <div class="col-sm-2" style="margin-top: 7px;">
        @if(Auth::guest())
            <button type="button" class="btn signin" id="myBtn" >Sign in</button>
        @else
            <a class="btn signin" href="{{url('index/logout')}}" style="float:right;">Log out</a>
        @endif
    </div>
</nav>


<div id="wrapper">
    <div class="overlay"></div>

    <!-- Sidebar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
        <ul class="nav sidebar-nav">
            <li class="sidebar-brand">
                <a href="{{url('index')}}">
                    Short News
                </a>
            </li>
        </ul>
    </nav>

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="row">
                        {{--<a href="http://shortnews.bdfestival.com.au/post/full-post/33038" style="text-decoration: none">--}}
                        {{--</a>--}}
                        @foreach($datas as $data)
                            <div class="col-sm-4">
                                <div class="news">
                                    <a href="{{url('index/detail')}}{{"/".$data->id}}" style="text-decoration: none">
                                        <div class="img-figure">
                                            <div class="cat">{{$data->category}}</div>
                                            @if($data->extension == 'png' || $data->extension =='jpg' || $data->extension =='jpeg' || $data->extension =='gif' || $data->extension == 'PNG' || $data->extension =='JPG' || $data->extension =='JPEG' || $data->extension =='GIF')
                                                <img src="{{url('download')}}/{{$data->image}}" class="" height="150px" width="">
                                            @elseif($data->extension == "mp4" || $data->extension == "flv" || $data->extension == "mpeg" || $data->extension == "avi" || $data->extension == "mp3" || $data->extension == "mov" || $data->extension == "MP4" || $data->extension == "FLV" || $data->extension == "MPEG" || $data->extension == "AVI" || $data->extension == "MP3")
                                                <div class="margin-bottom-50" style="height: 150px">
                                                    <div class="embed-responsive embed-responsive-16by9 thumbnail">
                                                        <video style="width: 100%" controls>
                                                            <source src="{{url('download')}}/{{$data->image}}" type="video/mp4">
                                                            Your browser does not support the audio element.
                                                        </video>
                                                    </div>
                                                </div>
                                            @else

                                            @endif
                                        </div>
                                        <div class="title">
                                            <h1>{{$data->title}}</h1>
                                        </div>
                                        <br><br>
                                        <P class="description">
                                            {{--{{$data->description}}--}}
                                            {{--{!! $data->content !!}--}}
                                            {{--Three majestic chariots - Nandighosa (Lord Jagannath), Taladwaja (Balabhadra) and ...--}}
                                            For more information, click here....
                                        </P>
                                    </a>

                                    <p class="more" style="position: absolute;bottom: 0px;margin-left: 40%">
                                        <a href="{{url('index/detail')}}{{"/".$data->id}}">read more</a>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('modal');


</div>
</body>



<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="/assets/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>

<script src="{{asset('js/detail.js')}}" type="text/javascript"></script>

{{--<script src="/assets/global/plugins/respond.min.js"></script>--}}
{{--<script src="/assets/global/plugins/excanvas.min.js"></script>--}}

<script src="/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
{{--<script src="/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>--}}
{{--<script src="/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>--}}
{{--<script src="/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>--}}

<script src="/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>

<script src="/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="/assets/admin/layout/scripts/demo.js" type="text/javascript"></script>

<script src="/assets/admin/pages/scripts/login.js" type="text/javascript"></script>
<script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Login.init();
        Demo.init();
    });


    $(document).ready(function () {
        var trigger = $('.hamburger'),
            overlay = $('.overlay'),
            isClosed = false;

        trigger.click(function () {
            hamburger_cross();
        });

        function hamburger_cross() {

            if (isClosed == true) {
                overlay.hide();
                trigger.removeClass('is-open');
                trigger.addClass('is-closed');
                isClosed = false;
            } else {
                overlay.show();
                trigger.removeClass('is-closed');
                trigger.addClass('is-open');
                isClosed = true;
            }
        }

        $('[data-toggle="offcanvas"]').click(function () {
            $('#wrapper').toggleClass('toggled');
        });
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "positionClass": "toast-top-right",
            "onclick": null,
            "showDuration": "1000",
            "hideDuration": "1000",
            "timeOut": "3000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        //console.log("{!! Session::get('status') !!}");
        @if(Session::get('status')){
            // console.log('aaa');
            // toastr.success("I do not think that means what you think it means.");
            toastr['success']("Login success", "Welcome")
            // alert('aaaa');
        }
        @endif
        // Command: toastr[success]("Gnome & Growl type non-blocking notifications", "Toastr Notifications")


    });


</script>


</html>