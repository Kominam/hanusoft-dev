<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="HanuSoft">
  <meta name="keyword" content="HanuSoft, Websites, Coder">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="img/favicon.png">
  <title>HanuSoft</title>

  <script>
    window.Laravel = <?php echo json_encode([
      'csrfToken' => csrf_token(),
    ]); ?>
  </script>
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

  <!-- Vendor CSS -->
  {{ Html::style(config('hanusoft.paths.public_user.vendor').'bootstrap/bootstrap.css') }}
  {{ Html::style(config('hanusoft.paths.public_user.vendor').'fontawesome/css/font-awesome.css') }}
   <link rel="stylesheet" href="{{url(config('hanusoft.paths.public_user.vendor').'owlcarousel/owl.carousel.min.css')}}" media="screen">
  <link rel="stylesheet" href="{{url(config('hanusoft.paths.public_user.vendor').'owlcarousel/owl.theme.default.min.css')}}" media="screen">
  <link rel="stylesheet" href="{{url(config('hanusoft.paths.public_user.vendor').'magnific-popup/magnific-popup.css')}}" media="screen">

  <!-- Theme CSS -->
  <link rel="stylesheet" href="{{url(config('hanusoft.paths.public_user.css').'theme.css')}}">
  <link rel="stylesheet" href="{{url(config('hanusoft.paths.public_user.css').'theme-elements.css')}}">
  <link rel="stylesheet" href="{{url(config('hanusoft.paths.public_user.css').'theme-blog.css')}}">
  <link rel="stylesheet" href="{{url(config('hanusoft.paths.public_user.css').'theme-shop.css')}}">
  <link rel="stylesheet" href="{{url(config('hanusoft.paths.public_user.css').'theme-animate.css')}}">

  <!-- Theme Custom CSS -->
  <link rel="stylesheet" href="{{url(config('hanusoft.paths.public_user.css').'custom.css')}}">

  <!-- Head Libs -->
  <script src="{{url(config('hanusoft.paths.public_user.vendor').'modernizr/modernizr.js')}}"></script>
  
  @stack('css')
  @stack('style')
  @stack('js-head')
  @stack('script-head')
</head>
