@extends('layout')

@section('access-content')
    <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('img/bg/bg_17.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 class="title">A Place for Entrepreneurs to Share and Discover New Stories</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="main main-raised">
        <div class="container">

            <div class="section">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <ul class="nav nav-pills nav-pills-primary">
                            <li class="active"><a href="#pill1" data-toggle="tab">All</a></li>
                            <li><a href="#pill2" data-toggle="tab">Nature</a></li>
                            <li><a href="#pill3" data-toggle="tab">Style</a></li>
                            <li><a href="#pill4" data-toggle="tab">Summer</a></li>
                            <li><a href="#pill5" data-toggle="tab">Sale</a></li>
                        </ul>
                        <div class="tab-content tab-space">
                            <div class="tab-pane active" id="pill1">

                            </div>
                            <div class="tab-pane" id="pill2">

                            </div>
                            <div class="tab-pane" id="pill3">

                            </div>
                            <div class="tab-pane" id="pill4">

                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">

                    <div class="col-md-6">
                        <div class="card card-raised card-background" style="background-image: url('img/blog/blog1.jpg')">
                            <div class="card-content">
                                <h6 class="category text-info">Nature</h6>
                                <a href="#">
                                    <h3 class="card-title">The Motivating Forces Behind Black Lives Matter</h3>
                                </a>
                                <p class="card-description">
                                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                </p>
                                <a href="#" class="btn btn-danger btn-round">
                                    <i class="material-icons">format_align_left</i> Read Article
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card card-raised card-background" style="background-image: url('img/blog/blog2.jpg')">
                            <div class="card-content">
                                <h6 class="category text-info">Summer</h6>
                                <h3 class="card-title">The Motivating Forces Behind Black Lives Matter</h3>
                                <p class="card-description">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                </p>
                                <a href="#" class="btn btn-primary btn-round">
                                    <i class="material-icons">format_align_left</i> Read Article
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card card-raised card-background" style="background-image: url('img/bg/bg_9.jpg')">
                            <div class="card-content">
                                <h6 class="category text-info">Sale</h6>
                                <h3 class="card-title">500 Sales in 6 months</h3>
                                <p class="card-description">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                </p>
                                <a href="#" class="btn btn-warning btn-round">
                                    <i class="material-icons">subject</i>Case Study
                                </a>
                                <a href="#" class="btn btn-white btn-just-icon btn-simple" title="Save to Pocket">
                                    <i class="fa fa-get-pocket"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="section">
                <h3 class="title text-center">You may also Like</h3>
                <br />
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-plain card-blog">
                            <div class="card-image">
                                <a href="#">
                                    <img class="img img-raised" src="img/blog/blog3.jpg" alt="blog-3"/>
                                </a>
                            </div>

                            <div class="card-content">
                                <h6 class="category text-info">Nature</h6>
                                <h4 class="card-title">
                                    <a href="#">The Motivating Forces Behind Black Lives Matter</a>
                                </h4>
                                <p class="card-description">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.<a href="#"> Read More </a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-plain card-blog">
                            <div class="card-image">
                                <a href="#">
                                    <img class="img img-raised" src="img/blog/blog4.jpg" alt="blog-4"/>
                                </a>
                            </div>
                            <div class="card-content">
                                <h6 class="category text-success">
                                    Sale
                                </h6>
                                <h4 class="card-title">
                                    <a href="#">The Motivating Forces Behind Black Lives Matter</a>
                                </h4>
                                <p class="card-description">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.<a href="#"> Read More </a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-plain card-blog">
                            <div class="card-image">
                                <a href="#">
                                    <img class="img img-raised" src="img/blog/blog5.jpg" alt="blog-5"/>
                                </a>
                            </div>

                            <div class="card-content">
                                <h6 class="category text-danger">
                                    Style
                                </h6>
                                <h4 class="card-title">
                                    <a href="#">The Motivating Forces Behind Black Lives Matter</a>
                                </h4>
                                <p class="card-description">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.<a href="#"> Read More </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="team-5 section-image" style="background-image: url('img/bg/bg_5.jpg')">

            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <div class="card card-profile card-plain">
                            <div class="col-md-5">
                                <div class="card-image">
                                    <a href="#">
                                        <img class="img" src="img/avatar/person-2.jpg" alt="person-2"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="card-content">
                                    <h4 class="card-title">Pamela A. Ouimet</h4>
                                    <h6 class="category text-muted">Author of the Month</h6>

                                    <p class="card-description">
                                        Thus much I thought proper to tell you in relation to yourself, and to the trust I reposed in you.
                                    </p>

                                    <div class="footer">
                                        <a href="#" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-facebook-square"></i></a>
                                        <a href="#" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-google"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card card-profile card-plain">
                            <div class="col-md-5">
                                <div class="card-image">
                                    <a href="#">
                                        <img class="img" src="img/avatar/person-3.jpg" alt="person-3"/>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="card-content">
                                    <h4 class="card-title">Maria D. Garrett</h4>
                                    <h6 class="category text-muted">Author of the Week</h6>

                                    <p class="card-description">
                                        Thus much I thought proper to tell you in relation to yourself, and to the trust I reposed in you.
                                    </p>

                                    <div class="footer">
                                        <a href="#" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-linkedin"></i></a>
                                        <a href="#" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-facebook-square"></i></a>
                                        <a href="#" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-dribbble"></i></a>
                                        <a href="#" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-google"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="subscribe-line">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="title">Need New Posts In Email!</h3>
                        <p class="description">
                            Join our newsletter and get news in your inbox every week!.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-plain card-form-horizontal">
                            <div class="card-content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-8">

                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">mail</i>
                                                </span>
                                                <input type="email" value="" placeholder="Your Email" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <button type="button" class="btn btn-primary btn-round btn-block">Subscribe</button>
                                        </div>
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
