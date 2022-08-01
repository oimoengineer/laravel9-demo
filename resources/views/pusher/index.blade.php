<!DOCTYPE html>
  <head>
    <title>Pusher Test</title>
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script>

      // Enable pusher logging - don't include this in production
      Pusher.logToConsole = true;

      let pusher = new Pusher('0a7f75f6587340aa1c25', {
        cluster: 'ap3'
      });

      let channel = pusher.subscribe('my-channel');
      channel.bind('my-event', function(data) {
        alert(JSON.stringify(data));
      });
    </script>
  </head>
  <body>
    <h1>Pusher Test</h1>
    <p>
      Try publishing an event to channel <code>my-channel</code>
      with event name <code>my-event</code>.
    </p>
  </body>
</html>