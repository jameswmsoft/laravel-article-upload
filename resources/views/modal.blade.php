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