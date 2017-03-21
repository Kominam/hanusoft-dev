<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="HanuSoft">
  <meta name="keyword" content="HanuSoft, Websites, Coder">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="/favicon.ico">
  <title>HanuSoft</title>

  <script>
    window.Laravel = <?php echo json_encode([
      'csrfToken' => csrf_token(),
    ]); ?>
  </script>
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

  <!-- Vendor CSS -->
  <link rel="stylesheet" href="{{url('vendor/guest/bootstrap/bootstrap.css')}}">
  <link rel="stylesheet" href="{{url('vendor/guest/fontawesome/css/font-awesome.css')}}">
  <link rel="stylesheet" href="{{url('vendor/guest/owlcarousel/owl.carousel.min.css')}}" media="screen">
  <link rel="stylesheet" href="{{url('vendor/guest/owlcarousel/owl.theme.default.min.css')}}" media="screen">
  <link rel="stylesheet" href="{{url('vendor/guest/magnific-popup/magnific-popup.css')}}" media="screen">

  <!-- Theme CSS -->
  <link rel="stylesheet" href="{{url('css/guest/theme.css')}}">
  <link rel="stylesheet" href="{{url('css/guest/theme-elements.css')}}">
  <link rel="stylesheet" href="{{url('css/guest/theme-blog.css')}}">
  <link rel="stylesheet" href="{{url('css/guest/theme-shop.css')}}">
  <link rel="stylesheet" href="{{url('css/guest/theme-animate.css')}}">

  <!-- Theme Custom CSS -->
  <link rel="stylesheet" href="{{url('css/guest/custom.css')}}">

  <!-- Head Libs -->
  <script src="{{url('vendor/guest/modernizr/modernizr.js')}}"></script>
  @stack('css')
  @stack('style')
  @stack('js-head')
  @stack('script-head')
</head>