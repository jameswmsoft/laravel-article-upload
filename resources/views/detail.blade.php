
<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Short News</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" sizes="192x192" href="./img/logo.png">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/public_custom.css">
    <link href="/assets/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css">

    {{--<--Modal>--}}
    {{--<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>--}}
    <link href="/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/admin/pages/css/login2.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="favicon.ico"/>


    <link rel="stylesheet" href="{{asset('css/detail.css')}}">

</head>
<body>
<nav class="navbar navbar-default">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{url('index')}}"> <img src="{{asset('img/logo.png')}}" height="50px" style="margin-top:-15px;"></a>
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
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                @if($data->extension == 'png' || $data->extension =='jpg' || $data->extension =='jpeg' || $data->extension =='gif' || $data->extension == 'PNG' || $data->extension =='JPG' || $data->extension =='JPEG' || $data->extension =='GIF')
                                <div class="col-sm-5">
                                        <img src="{{url('download')}}/{{$data->image}}" class="img-responsive" >
                                    </div>
                                @elseif($data->extension == "mp4" || $data->extension == "flv" || $data->extension == "mpeg" || $data->extension == "avi" || $data->extension == "mp3" || $data->extension == "mov" || $data->extension == "MP4" || $data->extension == "FLV" || $data->extension == "MPEG" || $data->extension == "AVI" || $data->extension == "MP3")
                                    <div class="col-sm-5 margin-bottom-50">
                                        <div class="embed-responsive embed-responsive-16by9 thumbnail">
                                            <video style="width: 100%" controls>
                                                <source src="{{url('download')}}/{{$data->image}}" type="video/mp4">
                                                Your browser does not support the audio element.
                                            </video>
                                        </div>
                                    </div>
                                @else

                                @endif

                                <div class="col-md-7">
                                    <h4>{{$data->title}}</h4>
                                    <p>{{$data->updated_at}} - {{$data->category}}</p>
                                    <p><br></p>
                                    <div>{!! $data->content !!}</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="entry-footer">

                                    <h6>
                                        <b>Comments:{{count($comments)}} records</b>

                                        {{--//Motiur Rahaman--}}
                                    </h6>
                                </div>
                            </div>
                        </div>

                        @if(!Auth::guest())
                            <div class="write" style="margin: 20px">

                                <form action="{{url('index/comment/save')}}" method="post" style="padding:15px;border: 2px solid dimgray">

                                    <input type="hidden" name="_token"  value="{{csrf_token()}}">

                                    <fieldset>
                                        <legend>Comment:</legend>
                                        {{--<select class="col-sm-4" style="padding: 5px" id="sel1">--}}
                                        {{--<option value="Latest News">Latest News</option>--}}
                                        {{--<option value="Economy">Economy</option>--}}
                                        {{--<option value="Sport">Sport</option>--}}
                                        {{--</select>--}}
                                        <input type="text" name="title" class="col-sm-9" placeholder="Title" style="margin-bottom: 7px;padding:5px 20px;border-radius: 4px">

                                        <input type="hidden" name="articleId" value="{{$data->id}}" >

                                        <button class="btn" style="float: right;padding: 5px 50px;background-color: #434343;color: white" type="submit">OK</button>
                                        <br> <br>
                                        <textarea name="content" style="    width:100%;" rows="5" placeholder="Content"></textarea>
                                        <br>

                                    </fieldset>
                                </form>
                            </div>
                        @endif

                        @foreach($comments as $comment)

                        <div class="comment" style="margin: 20px">
                            <div class="media-heading" style="border-bottom: 1px solid grey">
                                <h3 style="margin-bottom: 3px">{{$comment->userFullname}} <small><i>Posted on {{$comment->created_at}}</i></small></h3>
                            </div>
                            <p style="margin: 20px"><b>{{$comment->title}}</b></p>
                            <p style="margin: 20px">{{$comment->content}}</p><br><br>
                        </div>

                        @endforeach
                    </div>

                </div>

            </div>


        </div>
    </div>

    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Login/Sign Up</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="login">
                    <div class="content">
                        <!-- BEGIN LOGIN FORM -->
                        <form class="login-form" action="{{url('index/login')}}" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-title">
                                <span class="form-title">Welcome.</span>
                                <span class="form-subtitle">Please login.</span>
                            </div>
                            <div class="alert alert-danger display-hide">
                                <button class="close" data-close="alert"></button>
                                <span>Enter any username and password. </span>
                            </div>
                            <div class="form-group">
                                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                                <label class="control-label visible-ie8 visible-ie9">Username</label>
                                <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label visible-ie8 visible-ie9">Password</label>
                                <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary btn-block uppercase">Login</button>
                            </div>
                            <div class="create-account">
                                <p>
                                    <a href="javascript:;" id="register-btn">Create an account</a>
                                </p>
                            </div>
                        </form>
                        <!-- BEGIN REGISTRATION FORM -->
                        <form class="register-form" action="{{url('index/postSignup')}}" method="post">

                            <input type="hidden" name="_token" value=" {{ csrf_token() }}"/>
                            <div class="form-title">
                                <span class="form-title">Sign Up</span>
                            </div>
                            <p class="hint">
                                Enter your personal details below:
                            </p>
                            <div class="form-group">
                                <label class="control-label visible-ie8 visible-ie9">Full Name</label>
                                <input class="form-control placeholder-no-fix" type="text" placeholder="Full Name" name="fullname"/>
                            </div>
                            <div class="form-group">
                                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                                <label class="control-label visible-ie8 visible-ie9">Email</label>
                                <input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="email"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label visible-ie8 visible-ie9">Address</label>
                                <input class="form-control placeholder-no-fix" type="text" placeholder="Address" name="address"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label visible-ie8 visible-ie9">City/Town</label>
                                <input class="form-control placeholder-no-fix" type="text" placeholder="City/Town" name="city"/>
                            </div>

                            <p class="hint">
                                Enter your account details below:
                            </p>
                            <div class="form-group">
                                <label class="control-label visible-ie8 visible-ie9">Username</label>
                                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label visible-ie8 visible-ie9">Password</label>
                                <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
                                <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="rpassword"/>
                            </div>
                            <div class="form-actions">
                                <button type="button" id="register-back-btn" class="btn btn-default">Back</button>
                                <button type="submit" id="register-submit-btn" class="btn btn-primary uppercase pull-right">Submit</button>
                            </div>
                        </form>
                        <!-- END REGISTRATION FORM -->
                    </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



        {{--<div class="alert alert-success">--}}
            {{--{{ session('status') }}--}}
        {{--</div>--}}



</div>
<!-- /#wrapper -->

<script>

</script>
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/assets/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
<script src="/js/detail.js" type="text/javascript"></script>
{{--< -- Modal -->--}}
<script src="/assets/global/plugins/respond.min.js"></script>
<script src="/assets/global/plugins/excanvas.min.js"></script>

<script src="/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="/assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="/assets/admin/pages/scripts/login.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
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
    });


    $(document).ready(function(){
        $("#myBtn").click(function(){
            $("#myModal").modal();
        });
    });
</script>


</body>
</html>