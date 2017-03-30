@extends('layouts.guest.desktop')
@section('content')
<div class="main" role="main">
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li>
                            Home
                        </li>
                        <li class="active">
                            About
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
    <div class="container">
        <h2 class="word-rotator-title">
            {{ trans('about.hanusoft_give') }}
            <strong>
                <span class="word-rotate" data-plugin-options='{"delay": 2000}'>
                    <span class="word-rotate-items">
                        <span style="color:#F20202">
                            {{ trans('about.learn') }}.
                        </span>
                        <span style="color:#F20202">
                            {{ trans('about.practice') }}.
                        </span>
                        <span style="color:#F20202">
                            {{ trans('about.experience') }}.
                        </span>
                    </span>
                </span>
            </strong>
        </h2>
        <div class="row">
            <div class="col-md-10">
                <p class="lead">
                    {{ trans('about.invite') }}
                </p>
            </div>
            <div class="col-md-2">
                <a class="btn btn-lg btn-primary push-top" href="#">
                    {{ trans('about.join_with_us') }} !!!
                </a>
            </div>
        </div>
        <hr class="tall">
            <div class="row">
                <div class="col-md-6">
                    <h3>
                        <strong>
                            Who
                        </strong>
                        are we?
                    </h3>
                    <p>
                        {{ trans('about.who_we_are_explain') }}
                    </p>
                </div>
                <div class="col-md-4">
                    <iframe allowfullscreen="" frameborder="0" height="315" src="https://www.youtube.com/embed/FOtPeL-sVik" width="560">
                    </iframe>
                </div>
            </div>
            <hr class="tall">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="push-top">
                            Our
                            <strong>
                                History
                            </strong>
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="history">
                            <li data-appear-animation="fadeInUp">
                                <div class="thumb">
                                    <img alt="" src="{{url('user/img/develop-p3.jpg')}}"/>
                                </div>
                                <div class="featured-box">
                                    <div class="box-content">
                                        <h4>
                                            <strong>
                                                2016
                                            </strong>
                                        </h4>
                                        <p>
                                            {{ trans('about.history_2016') }}
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li data-appear-animation="fadeInUp">
                                <div class="thumb">
                                    <img alt="" src="{{url('user/img/develop-p2.jpg')}}"/>
                                </div>
                                <div class="featured-box">
                                    <div class="box-content">
                                        <h4>
                                            <strong>
                                                2013
                                            </strong>
                                        </h4>
                                        <p>
                                            {{ trans('about.history_2013') }}
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li data-appear-animation="fadeInUp">
                                <div class="thumb">
                                    <img alt="" src="{{url('user/img/develop-p1.jpg')}}"/>
                                </div>
                                <div class="featured-box">
                                    <div class="box-content">
                                        <h4>
                                            <strong>
                                                2007
                                            </strong>
                                        </h4>
                                        <p>
                                            {{ trans('about.history_2007') }}
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </hr>
        </hr>
    </div>
</div>
@stop
