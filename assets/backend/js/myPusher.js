$(document).ready(function(){
	

    // Enable pusher logging - don't include this in production
    // Pusher.logToConsole = true;

    var pusher = new Pusher('64116644fe77e7ebfb2f', {
      cluster: 'ap1',
      forceTLS: true
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      var config = {max: 6};

      mkNotifications(config);
      var options = {
        status: 'success',
        link: {
           url: 'message/inbox'
        }, 
        sound: true,
        duration: 8000
      };

      mkNoti(
          data['nama'],
          data['pesan'],
          options
      );
      // alert(JSON.stringify(data));
    });



    $('#tes-btn').on('click', function(){
        
        var tes = 'nama ku beni';

        var config = 
        {
            max: 6
        };

        mkNotifications(config);
        var options = 
        {
            status: 'success',
             link: {
              url: 'message/inbox'
            },
            sound: true
        };

        mkNoti(
            tes,
            "bang, ini bagaimana cara nya",
            options
        );
    });






});