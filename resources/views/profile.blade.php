@extends('layout')

@section('access-content')

    <div class="page-header header-filter" data-parallax="true" style="background-image: url('img/bg/bg_20.jpg');"></div>
    <div class="main main-raised">
        <div class="profile-content">
            <div class="container">

                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                        <div class="profile">
                            <div class="avatar">
                                <img src="img/avatar/person-1.jpg" alt="Circle Image" class="img-circle img-responsive img-raised">
                            </div>
                            <div class="name">
                                <h3 class="title">Elton L. Reaves</h3>
                                <h6>Developer</h6>
                                <a href="#" class="btn btn-just-icon btn-simple btn-dribbble"><i class="fa fa-dribbble"></i></a>
                                <a href="#" class="btn btn-just-icon btn-simple btn-twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="btn btn-just-icon btn-simple btn-pinterest"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-2 follow">
                        <button class="btn btn-fab btn-primary" rel="tooltip" title="Follow Me">
                            <i class="material-icons">add</i>
                        </button>
                    </div>
                </div>


                <div class="description text-center">
                    <p>Hello! I’m Elton L. Reaves. Senior Web Developer specializing in front end development. Experienced with all stages of the development cycle for dynamic web projects. Well-versed in numerous programming languages including JavaScript, SQL, and C. Stng background in project management and customer relations.</p>
                </div>

                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="profile-tabs">
                            <div class="nav-align-center">
                                <ul class="nav nav-pills nav-pills-icons" role="tablist">
                                    <li class="active">
                                        <a href="#work" role="tab" data-toggle="tab">
                                            <i class="material-icons">palette</i>
                                            Portfolio
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#connections" role="tab" data-toggle="tab">
                                            <i class="material-icons">people</i>
                                            Experience
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#media" role="tab" data-toggle="tab">
                                            <i class="material-icons">camera</i>
                                            References
                                        </a>
                                    </li>
                                </ul>


                            </div>
                        </div>
                        <!-- End Profile Tabs -->
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active work" id="work">
                        <div class="row">
                            <div class="col-md-7 col-md-offset-1">
                                <h4 class="title">Latest Work</h4>
                                <div class="row collections">
                                    <div class="col-md-6">
                                        <div class="card card-background" style="background-image: url('img/avatar/profile1.jpg')">
                                            <a href="#"></a>
                                            <div class="card-content">
                                                <label class="label label-primary">Summer</label>
                                                <a href="#">
                                                    <h2 class="card-title">Style</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card card-background" style="background-image: url('img/avatar/profile2.jpg')">
                                            <a href="#"></a>
                                            <div class="card-content">
                                                <label class="label label-primary">Holiday</label>
                                                <a href="#">
                                                    <h2 class="card-title">Beach</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card card-background" style="background-image: url('img/avatar/profile3.jpg')">
                                            <a href="#"></a>
                                            <div class="card-content">
                                                <label class="label label-primary">Nature</label>
                                                <a href="#">
                                                    <h2 class="card-title">Green</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card card-background" style="background-image: url('img/avatar/profile4.jpg')">
                                            <a href="#"></a>
                                            <div class="card-content">
                                                <label class="label label-primary">Water</label>
                                                <a href="#">
                                                    <h2 class="card-title">Bridge</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-md-offset-1 stats">
                                <h4 class="title">Stats</h4>
                                <ul class="list-unstyled">
                                    <li><b>46</b> Project</li>
                                    <li><b>10</b> Employee</li>
                                    <li><b>150</b> Rate</li>

                                </ul>
                                <hr />
                                <h4 class="title">About My Work</h4>
                                <p class="description">Senior Web Developer specializing in front end development. Experienced with all stages of the development cycle for dynamic web projects. Well-versed in numerous programming languages including JavaScript, SQL, and C. Stng background in project management and customer relations.</p>
                                <hr />
                                <h4 class="title">Style</h4>
                                <span class="label label-primary">Nature</span>
                                <span class="label label-rose">Holiday</span>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane connections" id="connections">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-1">
                                <div class="card card-profile card-plain">
                                    <div class="col-md-5">
                                        <div class="card-image">
                                            <a href="#">
                                                <img class="img" src="img/avatar/person-1.jpg" alt="person-1"/>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-content">
                                            <h4 class="card-title">Raymond D. Pickett</h4>
                                            <h6 class="category text-muted">CEO</h6>

                                            <p class="card-description">
                                                Thus much I thought proper to tell you in relation to yourself, and to the trust I reposed in you.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5">
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
                                            <h6 class="category text-muted">Co-Founder</h6>

                                            <p class="card-description">
                                                Thus much I thought proper to tell you in relation to yourself, and to the trust I reposed in you.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 col-md-offset-1">
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
                                            <h6 class="category text-muted">Developer</h6>

                                            <p class="card-description">
                                                Thus much I thought proper to tell you in relation to yourself, and to the trust I reposed in you.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="card card-profile card-plain">
                                    <div class="col-md-5">
                                        <div class="card-image">
                                            <a href="#">
                                                <img class="img" src="img/avatar/person-4.jpg" alt="person-4"/>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-content">
                                            <h4 class="card-title">Elton L. Reaves</h4>
                                            <h6 class="category text-muted">DJ</h6>

                                            <p class="card-description">
                                                Thus much I thought proper to tell you in relation to yourself, and to the trust I reposed in you.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane text-center gallery" id="media">
                        <div class="row">
                            <div class="col-md-3 col-md-offset-3">
                                <img src="img/avatar/profile1.jpg" class="img-rounded" alt="profile-1"/>
                                <img src="img/avatar/profile2.jpg" class="img-rounded" alt="profile-2"/>
                            </div>
                            <div class="col-md-3">
                                <img src="img/avatar/profile3.jpg" class="img-rounded" alt="profile-3"/>
                                <img src="img/avatar/profile4.jpg" class="img-rounded" alt="profile-4"/>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


       