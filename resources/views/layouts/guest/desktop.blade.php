<!DOCTYPE html>
<html>
    @include('layouts.guest.includes.head')
    <body>
        <div class="body" id="app">
            <noscript>
                Your script is turn off.Turn it on browser setting
            </noscript>
            <div class="wrapper">
      @include('layouts.guest.includes.header')
            <router-view></router-view>
      @include('layouts.guest.includes.footer')
      @include('layouts.guest.includes.scripts')
            </div>
        </div>
    </body>
</html>
