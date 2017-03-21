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
                @yield('content')
                @include('layouts.guest.includes.footer')
            </div>
        </div>
    </body>
    @include('layouts.guest.includes.script')
</html>
