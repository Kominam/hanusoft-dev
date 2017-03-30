@extends('layouts.guest.desktop')
@section('content')
<div role="main" class="main">
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                      <li></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>About {{$user->name}}</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            <div class="thumbnail">
                            <img alt="" height="300" class="img-responsive" src="{{url($user->avatar_image)}}">
                        </div>
            </div>
            <div class="col-md-8">
                <h2 class="shorter"><strong>{{$user->name}}</strong></h2>
                <h4>{{$user->major}}</h4>
                <span class="thumb-info-social-icons">
                <a data-tooltip data-placement="bottom" target="_blank" href="{{$user->facebook}}" data-original-title="Facebook"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                <a data-tooltip data-placement="bottom" href="{{$user->gmail}}" data-original-title="Gmail"><i class="fa fa-envelope"></i><span>Gmail</span></a>
                <a data-tooltip data-placement="bottom" href="{{$user->github}}" data-original-title="Github"><i class="fa fa-github"></i><span>Github</span></a>
                </span>
                <p>{{$user->bio}}</p>
                <ul class="list icons list-unstyled">
                    <li><i class="fa fa-check"></i> Fusce sit amet orci quis arcu vestibulum vestibulum sed ut felis.</li>
                    <li><i class="fa fa-check"></i> Phasellus in risus quis lectus iaculis vulputate id quis nisl.</li>
                    <li><i class="fa fa-check"></i> Iaculis vulputate id quis nisl.</li>
                </ul>
            </div>
        </div>
        <hr class="tall" />
        <div class="row center">
           
        </div>
    </div>
    <section class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/parallax-transparent.jpg);">
        <div class="container">
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="short">My <strong>Work</strong></h3>
            </div>
            <ul class="portfolio-list">
         
            </ul>
        </div>
    </div>
</div>
@endsection()