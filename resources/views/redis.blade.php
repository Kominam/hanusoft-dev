<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Event Broadcasting Example</title>
    <style>
        body{
            padding: 20px;
        }
    </style>
</head>
<body>
    <h1>Event fired</h1>
    <p id="power">0</p>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdn.socket.io/socket.io-1.3.5.js"></script>
   <script>
var socketURL = 'http://hanusoft.com:3000'; // 192.168.10.10 can be replaced with the IP address of your server.

// If you are using Elixir/Browserify use commented out socket instead.
var socket = io(socketURL);
// var socket = require('socket.io-client')(socketURL);

// The event name is created by the event channel (example-event) we set earlier
// and the class name with the full namespace (App\Events\EventName).
socket.on('test-channel:App\\Events\\TestEvent', function (message) {
   $('#power').text(parseInt($('#power').text()) + parseInt(message.data.power));
});
</script>
</body>
</html>