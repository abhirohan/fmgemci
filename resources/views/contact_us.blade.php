@extends('layout')

@section('access-content')
    <div id="contactUsMap" class="big-map"></div>

    <div class="main main-raised">
        <div class="contact-content">
            <div class="container">
                <h2 class="title">Send us a message</h2>
                <div class="row">
                    <div class="col-md-6">
                        <p class="description">You can contact us with anything related to our Products. We'll get in touch with you as soon as possible.<br><br>
                        </p>
                        <form id="contact-form" method="post">
                            <div class="form-group label-floating">
                                <label class="control-label">Your name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Email address</label>
                                <input type="email" name="email" class="form-control"/>
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Phone</label>
                                <input type="text" name="phone" class="form-control"/>
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Message For us</label>
                                <textarea name="message" class="form-control" id="message" rows="6"></textarea>
                            </div>
                            <div class="submit text-center">
                                <input type="submit" class="btn btn-primary btn-raised btn-round" value="Contact Us" />
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 col-md-offset-2">
                        <div class="info info-horizontal">
                            <div class="icon icon-primary">
                                <i class="material-icons">pin_drop</i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Find us</h4>
                                <p> 4 Great Western Road<br>
                                    LONGHIRST<br>
                                    NE61 2DN

                                </p>
                            </div>
                        </div>
                        <div class="info info-horizontal">
                            <div class="icon icon-primary">
                                <i class="material-icons">phone</i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Give us a call</h4>
                                <p> Ellie Brookes<br>
                                    +40 077 2817 7314<br>
                                    Mon - Sat, 9:00-23:00
                                </p>
                            </div>
                        </div>
                        <div class="info info-horizontal">
                            <div class="icon icon-primary">
                                <i class="material-icons">business_center</i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Legal Info</h4>
                                <p> Company Pvt Ltd.<br>
                                    VAT &middot; ER4545476<br>
                                    IBAN &middot; WE57896544232<br>
                                    Bank &middot; Great Bank
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection