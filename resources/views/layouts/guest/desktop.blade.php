<!DOCTYPE html>
<html>
    @include('layouts.guest.includes.head')
    <body>
        <div class="body">
            <noscript>
                Your script is turn off.Turn it on browser setting
            </noscript>
            <div class="wrapper">
                @include('layouts.guest.includes.header')
      @yield('content')
      @include('layouts.guest.includes.footer')
      @include('layouts.guest.includes.scripts')
            </div>
        </div>
    </body>
</html>
