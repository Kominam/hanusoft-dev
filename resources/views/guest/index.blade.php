@extends('layouts.guest.desktop')
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.7.3/socket.io.js">
    </script>
    <script src="{{ mix('js/guest.js') }}">
    </script>
@endpush
@section('content')
<div class="main" role="main">
    @component('guest.components.slider')
  @endcomponent
    <div class="home-intro">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p>
                        The fastest way to grow your business with the leader in
                        <em>
                            Technology
                        </em>
                        <span>
                            Check out our options and features included.
                        </span>
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="get-started">
                        <a class="btn btn-lg btn-primary" href="#">
                            Get Started Now!
                        </a>
                        <div class="learn-more">
                            or
                            <a href="#">
                                learn more.
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="container">
            <div class="row center">
                <div class="col-md-12">
                    <h1 class="short word-rotator-title">
                        Hanusoft is
                        <strong class="inverted">
                            <span class="word-rotate" data-plugin-options='{"delay": 2000, "animDelay": 300}'>
                                <span class="word-rotate-items">
                                    <span>
                                        incredibly
                                    </span>
                                    <span>
                                        especially
                                    </span>
                                    <span>
                                        extremely
                                    </span>
                                </span>
                            </span>
                        </strong>
                        creative and fully active.
                    </h1>
                    <p class="featured lead">
                        Winners never quit and quitters never win
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row center">
            <div class="col-md-12">
                <img alt="hanusoft progress" class="img-responsive" data-appear-animation="fadeInUp" src="/user/img/slides/hs-slider2.jpg" style="margin: 45px 0px -35px;">
                </img>
            </div>
        </div>
    </div>
    <section class="featured">
        <div class="container">
            <div class="row featured-boxes">
                <div class="col-md-3 col-sm-6">
                    <div class="featured-box featured-box-primary">
                        <div class="box-content">
                            <i class="icon-featured fa fa-html5">
                            </i>
                            <h4>
                                Web Development
                            </h4>
                            <p>
                                We build, create and maintain full function of the web.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="featured-box featured-box-secundary">
                        <div class="box-content">
                            <i class="icon-featured fa fa-magic">
                            </i>
                            <h4>
                                UI/UX Design
                            </h4>
                            <p>
                                Iterative process to support incremental software.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="featured-box featured-box-tertiary">
                        <div class="box-content">
                            <i class="icon-featured fa fa-android">
                            </i>
                            <h4>
                                Software Engineer
                            </h4>
                            <p>
                                Develope, implement and maintain system.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="featured-box featured-box-quartenary">
                        <div class="box-content">
                            <i class="icon-featured fa fa-check-square-o">
                            </i>
                            <h4>
                                Testing
                            </h4>
                            <p>
                                Conduct testing of whole software to indentify errors.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="feature-box secundary">
                                <div class="feature-box-icon">
                                    <i class="fa fa-group">
                                    </i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="shorter">
                                        Customer Support
                                    </h4>
                                    <p class="tall">
                                    </p>
                                </div>
                            </div>
                            <div class="feature-box secundary">
                                <div class="feature-box-icon">
                                    <i class="fa fa-file">
                                    </i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="shorter">
                                        HTML5 / CSS3 / JS
                                    </h4>
                                    <p class="tall">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-box secundary">
                                <div class="feature-box-icon">
                                    <i class="fa fa-group">
                                    </i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="shorter">
                                        FAQ
                                    </h4>
                                    <p class="tall">
                                    </p>
                                </div>
                            </div>
                            <div class="feature-box secundary">
                                <div class="feature-box-icon">
                                    <i class="fa fa-check">
                                    </i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="shorter">
                                        Social media integration
                                    </h4>
                                    <p class="tall">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-box secundary">
                                <div class="feature-box-icon">
                                    <i class="fa fa-file">
                                    </i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="shorter">
                                        Hosting
                                    </h4>
                                    <p class="tall">
                                    </p>
                                </div>
                            </div>
                            <div class="feature-box secundary">
                                <div class="feature-box-icon">
                                    <i class="fa fa-stack-overflow">
                                    </i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="shorter">
                                        PHP
                                    </h4>
                                    <p class="tall">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="tall"/>
    <div class="map-section">
        <section class="featured footer map">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="recent-posts push-bottom">
                            <h2>
                                Latest
                                <strong>
                                    Blog
                                </strong>
                                Posts
                            </h2>
                            <div class="row">
                                <div class="owl-carousel" data-plugin-options='{"items": 1}'>
                                    <div>
                                        <div class="col-md-6">
                                            <article>
                                                <div class="date">
                                                    <span class="day">
                                                        15
                                                    </span>
                                                    <span class="month">
                                                        Jan
                                                    </span>
                                                </div>
                                                <h4>
                                                    <a href="blog-post.html">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    </a>
                                                </h4>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero.
                                                    <a class="read-more" href="#">
                                                        read more
                                                        <i class="fa fa-angle-right">
                                                        </i>
                                                    </a>
                                                </p>
                                            </article>
                                        </div>
                                        <div class="col-md-6">
                                            <article>
                                                <div class="date">
                                                    <span class="day">
                                                        15
                                                    </span>
                                                    <span class="month">
                                                        Jan
                                                    </span>
                                                </div>
                                                <h4>
                                                    <a href="blog-post.html">
                                                        Lorem ipsum dolor
                                                    </a>
                                                </h4>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.
                                                    <a class="read-more" href="#">
                                                        read more
                                                        <i class="fa fa-angle-right">
                                                        </i>
                                                    </a>
                                                </p>
                                            </article>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="col-md-6">
                                            <article>
                                                <div class="date">
                                                    <span class="day">
                                                        12
                                                    </span>
                                                    <span class="month">
                                                        Jan
                                                    </span>
                                                </div>
                                                <h4>
                                                    <a href="blog-post.html">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    </a>
                                                </h4>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero.
                                                    <a class="read-more" href="http://preview.oklerthemes.com/">
                                                        read more
                                                        <i class="fa fa-angle-right">
                                                        </i>
                                                    </a>
                                                </p>
                                            </article>
                                        </div>
                                        <div class="col-md-6">
                                            <article>
                                                <div class="date">
                                                    <span class="day">
                                                        11
                                                    </span>
                                                    <span class="month">
                                                        Jan
                                                    </span>
                                                </div>
                                                <h4>
                                                    <a href="blog-post.html">
                                                        Lorem ipsum dolor
                                                    </a>
                                                </h4>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    <a class="read-more" href="http://preview.oklerthemes.com/">
                                                        read more
                                                        <i class="fa fa-angle-right">
                                                        </i>
                                                    </a>
                                                </p>
                                            </article>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="col-md-6">
                                            <article>
                                                <div class="date">
                                                    <span class="day">
                                                        15
                                                    </span>
                                                    <span class="month">
                                                        Jan
                                                    </span>
                                                </div>
                                                <h4>
                                                    <a href="blog-post.html">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    </a>
                                                </h4>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero.
                                                    <a class="read-more" href="http://preview.oklerthemes.com/">
                                                        read more
                                                        <i class="fa fa-angle-right">
                                                        </i>
                                                    </a>
                                                </p>
                                            </article>
                                        </div>
                                        <div class="col-md-6">
                                            <article>
                                                <div class="date">
                                                    <span class="day">
                                                        15
                                                    </span>
                                                    <span class="month">
                                                        Jan
                                                    </span>
                                                </div>
                                                <h4>
                                                    <a href="blog-post.html">
                                                        Lorem ipsum dolor
                                                    </a>
                                                </h4>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.
                                                    <a class="read-more" href="http://preview.oklerthemes.com/">
                                                        read more
                                                        <i class="fa fa-angle-right">
                                                        </i>
                                                    </a>
                                                </p>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2>
                            <strong>
                                Meet
                            </strong>
                            Our founder
                        </h2>
                        <div class="row">
                            <div class="owl-carousel push-bottom" data-plugin-options='{"items": 1}'>
                                <div>
                                    <div class="col-md-12">
                                        <blockquote class="testimonial">
                                            <p>
                                                We desire to create a dynamic enviroment for all students to not only study but also experience
                                            </p>
                                        </blockquote>
                                        <div class="testimonial-arrow-down">
                                        </div>
                                        <div class="testimonial-author">
                                            <div class="img-thumbnail img-thumbnail-small">
                                                <img alt="" height="120px" src="/user/img/founder.jpg" width="120px">
                                                </img>
                                            </div>
                                            <p>
                                                <strong>
                                                    Trinh Bao Ngoc
                                                </strong>
                                                <span>
                                                    FIT-Vice
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="col-md-12">
                                        <blockquote class="testimonial">
                                            <p>
                                                We hope that Hanusoft will become an academic playground for all students who have enthusiasts of Information Technology.See you soon in Hanusoft.
                                            </p>
                                        </blockquote>
                                        <div class="testimonial-arrow-down">
                                        </div>
                                        <div class="testimonial-author">
                                            <div class="img-thumbnail img-thumbnail-small">
                                                <img alt="" src="user/img/founder.jpg">
                                                </img>
                                            </div>
                                            <p>
                                                <strong>
                                                    Trinh Bao Ngoc
                                                </strong>
                                                <span>
                                                    FIT - Vice
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <hr class="tall">
        <div class="container">
            <div class="row center">
                <div class="col-md-12">
                    <h2 class="shorter word-rotator-title push-top">
                        Our
                        <strong>
                            Portfolio
                        </strong>
                    </h2>
                    <p class="lead push-bottom">
                        Check out what we have been doing
                    </p>
                </div>
            </div>
        </div>
        @component('guest.components.projects')
        @endcomponent
        @component('guest.components.feedback')
        @endcomponent
        @component('guest.components.partner')
        @endcomponent
        <section class="call-to-action featured footer">
            <div class="container">
                <div class="row">
                    <div class="center">
                        <h3>
                            Hanusoft is
                            <strong>
                                everything
                            </strong>
                            you need to create an
                            <strong>
                                awesome
                            </strong>
                            website!
                            <a class="btn btn-lg btn-primary" data-appear-animation="bounceIn" href="#" target="_blank">
                                Contact us Now!
                            </a>
                            <span class="arrow hlb hidden-xs hidden-sm hidden-md" data-appear-animation="rotateInUpLeft" style="top: -22px;">
                            </span>
                        </h3>
                    </div>
                </div>
            </div>
        </section>
    </hr>
</div>
@endsection
