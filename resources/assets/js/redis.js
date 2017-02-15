import Echo from "laravel-echo";

var echo = window.Echo = new Echo({
    broadcaster: 'socket.io',
    host: 'http://hanusoft.com:3000'
});

echo.channel('test-channel').listen('TestEvent', function (data) {
    console.log(data);
});