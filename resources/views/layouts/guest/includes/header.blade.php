<header id="header">
  <div class="container">
    <div class="logo">
      <router-link to="/">
        <img alt="Hanusoft" width="111" height="54" data-sticky-width="82" data-sticky-height="40"
        src="/user/img/logo.png">
      </router-link>
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
          <a href="#"><i class="fa fa-angle-right"></i>About Us</a>
        </li>
        <li>
          <a href="#"><i class="fa fa-angle-right"></i>Contact Us</a>
        </li>
        <li class="phone">
          <span><i class="fa fa-phone"></i>(84 4)35 43 0267</span>
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
            <li><router-link to="/">Home</router-link></li>
            <li><router-link to="/about">About</router-link></li>
            <li><router-link to="/service">Service</router-link></li>
            <li><router-link to="/members">Members</router-link></li>
            <li><router-link to="/projects">Projects</router-link></li>
            <li><router-link to="/posts">Posts</router-link></li>
            <li><router-link to="/contact">Contact</router-link></li>
        </ul>
      </nav>
    </div>
  </div>
</header>
