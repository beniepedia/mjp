$(document).ready(function(){
	

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('64116644fe77e7ebfb2f', {
      cluster: 'ap1',
      forceTLS: true
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      var config = 
        {
            max: 6
        };

        mkNotifications(config);
        var options = 
        {
            status: 'success',
            sound: true
        };

        mkNoti(
            "Pesan Baru",
            "Example of generated notification with Notifications Generator",
            options
        );
      // alert(JSON.stringify(data));
    });




    $('#tes-btn').on('click', function(){
        var config = 
        {
            max: 6
        };

        mkNotifications(config);
        var options = 
        {
            status: 'success',
            sound: true
        };

        mkNoti(
            "MK Web Notifications",
            "Example of generated notification with Notifications Generator",
            options
        );
    });






});