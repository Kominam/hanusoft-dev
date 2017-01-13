@extends('layouts.guest.desktop')
@section('content')
<div class="main" role="main">
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li class="active">
                            About Us
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>
                        About Us
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
    <div class="google-map" id="googlemaps">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="offset-anchor" id="contact-sent">
                </div>
                <h2 class="short">
                    <strong>
                        Contact
                    </strong>
                    Us
                </h2>
                <form action="#" enctype="multipart/form-data" id="contactFormAdvanced" method="POST">
                    <input name="_token" type="hidden" value="{{csrf_token()}}">
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label>
                                        Your name *
                                    </label>
                                    <input class="form-control" data-msg-required="Please enter your name." id="name" maxlength="100" name="name" required="" type="text" value="">
                                        @if ($errors->has('name'))
                                        <span class="alert alert-danger">
                                            {{ $errors->first('name') }}
                                        </span>
                                        @endif
                                    </input>
                                </div>
                                <div class="col-md-6">
                                    <label>
                                        Your email address *
                                    </label>
                                    <input class="form-control" data-msg-email="Please enter a valid email address." data-msg-required="Please enter your email address." id="email" maxlength="100" name="email" required="" type="email" value="">
                                        @if ($errors->has('email'))
                                        <span class="alert alert-danger">
                                            {{ $errors->first('email') }}
                                        </span>
                                        @endif
                                    </input>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>
                                        Subject *
                                    </label>
                                    <input class="form-control" data-msg-required="Please enter your subject." id="subject" maxlength="100" name="subject" required="" type="text" value="">
                                        @if ($errors->has('subject'))
                                        <span class="alert alert-danger">
                                            {{ $errors->first('subject') }}
                                        </span>
                                        @endif
                                    </input>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>
                                        Message *
                                    </label>
                                    <textarea class="form-control" data-msg-required="Please enter your message." id="message" maxlength="5000" name="message" required="" rows="10">
                                    </textarea>
                                    @if ($errors->has('message'))
                                    <span class="alert alert-danger">
                                        {{ $errors->first('message') }}
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>
                                    Human Verification *
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                {!! app('captcha')->display(); !!}
                            </div>
                            @if ($errors->has('g-recaptcha-response'))
                            <span class="alert alert-danger">
                                <strong>
                                    {{ $errors->first('g-recaptcha-response') }}
                                </strong>
                            </span>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                </hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input class="btn btn-primary btn-lg pull-right" id="contactFormSubmit" type="submit" value="Send Message">
                                </input>
                            </div>
                        </div>
                    </input>
                </form>
            </div>
            <div class="col-md-6">
                <h4 class="push-top">
                    Get in
                    <strong>
                        touch
                    </strong>
                </h4>
                <p>
                    Hanusoft is an IT club, working in Faculty of Information Technology. Taking part in Hanusoft if you have passion with programming.
                </p>
                <hr/>
                <h4>
                    The
                    <strong>
                        Office
                    </strong>
                </h4>
                <ul class="list-unstyled">
                    <li>
                        <i class="fa fa-map-marker">
                        </i>
                        <strong>
                            Address:
                        </strong>
                        Hanoi University Km9 Nguyen Trai, Thanh Xuan, Ha Noi
                    </li>
                    <li>
                        <i class="fa fa-phone">
                        </i>
                        <strong>
                            Phone:
                        </strong>
                        (123) 456-7890
                    </li>
                    <li>
                        <i class="fa fa-envelope">
                        </i>
                        <strong>
                            Email:
                        </strong>
                        <a href="mailto:hanusoft.dev@gmail.com">
                            hanusoft.dev@gmail.com
                        </a>
                    </li>
                </ul>
                <hr/>
                <h4>
                    Business
                    <strong>
                        Hours
                    </strong>
                </h4>
                <ul class="list-unstyled">
                    <li>
                        <i class="fa fa-time">
                        </i>
                        Monday - Friday 9am to 5pm
                    </li>
                    <li>
                        <i class="fa fa-time">
                        </i>
                        Saturday - 9am to 2pm
                    </li>
                    <li>
                        <i class="fa fa-time">
                        </i>
                        Sunday - Closed
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@stop
@push('script')
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBPeM7t3PgqmMYE-lkT2oIDybq4fCb498Y">
</script>
<script>
    //google map
    function initialize() {
        var myLatlng = new google.maps.LatLng(20.989491066295383, 105.79470402951665);
        var mapOptions = {
            zoom: 15,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById('googlemaps'), mapOptions);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Hello World!'
        });
    }
   		google.maps.event.addDomListener(window, 'load', initialize);
</script>
@endpush
