<!DOCTYPE html>
<html>
    @include('layouts.user.includes.head')
    <body>
        <div class="body">
            <noscript>
                Your script is turn off.Turn it on browser setting
            </noscript>
            <div class="wrapper">
                @include('layouts.user.includes.header')
      @yield('content')
      @include('layouts.user.includes.footer')
      @include('layouts.user.includes.scripts')
            </div>
        </div>
    </body>
</html>
