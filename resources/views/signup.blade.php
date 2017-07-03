@extends('layout')

@section('access-content')

    <div class="page-header header-filter" style="background-image: url('img/bg/bg_1.jpg'); background-size: cover; background-position: top center;">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="card card-signup">
                        <h2 class="card-title text-center">Sign Up</h2>
                        <div class="row">
                            <div class="col-md-5 col-md-offset-1">
                                <div class="info info-horizontal">
                                    <div class="icon icon-rose">
                                        <i class="material-icons">cached</i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">Infomation</h4>
                                        <p class="description">
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                                        </p>
                                    </div>
                                </div>

                                <div class="info info-horizontal">
                                    <div class="icon icon-primary">
                                        <i class="material-icons">desktop_windows</i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">Designer</h4>
                                        <p class="description">
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                        </p>
                                    </div>
                                </div>

                                <div class="info info-horizontal">
                                    <div class="icon icon-info">
                                        <i class="material-icons">filter_vintage</i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title">Friends</h4>
                                        <p class="description">
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="social text-center">

                                    <button class="btn btn-just-icon btn-round btn-google-plus">
                                        <i class="fa fa-google-plus"></i>
                                    </button>
                                    <button class="btn btn-just-icon btn-round btn-facebook">
                                        <i class="fa fa-facebook"> </i>
                                    </button>
                                    <button class="btn btn-just-icon btn-round btn-twitter">
                                        <i class="fa fa-twitter"></i>
                                    </button>
                                    <button class="btn btn-just-icon btn-round btn-linkedin">
                                        <i class="fa fa-linkedin"></i>
                                    </button>

                                    <h4> or be classical </h4>
                                </div>

                                <form class="form">
                                    <div class="card-content">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">face</i>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Full Name">
                                        </div>

                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">email</i>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Email">
                                        </div>

                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">lock_outline</i>
                                            </span>
                                            <input type="password" placeholder="Password" class="form-control" />
                                        </div>

                                        <!-- If you want to add a checkbox to this form, uncomment this code -->

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="optionsCheckboxes" checked>
                                                I agree to the <a href="#">terms and conditions</a>.
                                            </label>
                                        </div>
                                    </div>
                                    <div class="footer text-center">
                                        <a href="#" class="btn btn-primary btn-round">Let's Started</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
@endsection
