<header id="header">
  <div class="container">
    <div class="logo">
      <a href="{{ route('index') }}">
        <img alt="Hanusoft" width="111" height="54" data-sticky-width="82" data-sticky-height="40"
        src="{{url('user/img/logo.png')}}">
      </a>
    </div>
    <div class="search">
      <form id="searchForm" action="#" method="get">
        <div class="input-group">
          <input type="text" class="form-control search" name="q" id="q" placeholder="Search..." required>
          <span class="input-group-btn">
            <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
          </span>
        </div>
      </form>
    </div>
    <nav>
      <ul class="nav nav-pills nav-top">
        <li>
          <a href="{{route('about')}}"><i class="fa fa-angle-right"></i>About Us</a>
        </li>
        <li>
          <a href="{{-- {{route('contact')}} --}}"><i class="fa fa-angle-right"></i>Contact Us</a>
        </li>
        <li class="phone">
          <span><i class="fa fa-phone"></i>(84 4)35 43 0267</span>
        </li>
        <li>
          <form action="{{ route('changeLang') }}" class="form-lang" method="post">
            <select name="locale" onchange='this.form.submit();'>
              <option value="en">English</option>
              <option value="vn"{{ Lang::locale() === 'vn' ? 'selected' : '' }}>Vietnam</option>
            </select>
            {{ csrf_field() }}
          </form>
        </li>
      </ul>
    </nav>
    <button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
      <i class="fa fa-bars"></i>
    </button>
  </div>
  <div class="navbar-collapse nav-main-collapse collapse">
    <div class="container">
      <ul class="social-icons">
        <li class="facebook"><a href="https://www.facebook.com/groups/1598773820362830/?fref=ts" target="_blank" title="Facebook">Facebook</a></li>
        <li class="googleplus"><a href="https://plus.google.com/u/3/108878251893660650893" target="_blank" title="Twitter">Gmail</a></li>
        <li class="github"><a href="https://github.com/Hanusoft" target="_blank" title="Github">Github</a></li>
      </ul>
      <nav class="nav-main mega-menu">
        <ul class="nav nav-pills nav-main" id="mainMenu">
          <li class="{{ Route::currentRouteNamed('index') ? 'active' : '' }}">
            <a href='{{ route('index') }}'>{{ trans('menu.home') }}</a>
          </li>
          <li class="{{ Route::currentRouteNamed('about') ? 'active' : '' }}">
            <a href="{{route('about')}}">{{ trans('menu.about') }}</a></li>
          <li class="{{ Route::currentRouteNamed('services') ? 'active' : '' }}">
            <a href="{{route('services')}}">{{ trans('menu.service') }}</a>
          </li>
          <li class="{{ Route::currentRouteNamed('members') ? 'active' : '' }}">
            <a href="{{route('members')}}">{{ trans('menu.members') }} </a>
          </li>
          <li class="{{-- {{ Route::currentRouteNamed('projects') ? 'active' : '' }} --}}">
            <a href="{{-- {{route('projects')}} --}}">{{ trans('menu.projects') }}</a>
          </li>
          <li class="{{-- {{ Route::currentRouteNamed('posts') ? 'active' : '' }} --}}">
            <a href="{{-- {{route('posts')}} --}}">{{ trans('menu.posts') }}</a>
          </li>
          <li class="{{-- {{ Route::currentRouteNamed('contact') ? 'active' : '' }} --}}">
            <a href="{{-- {{route('contact')}} --}}">{{ trans('menu.contact') }}</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</header>
