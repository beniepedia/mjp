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
           url: '../message/inbox/'
        }, 
        sound: true,
        duration: 8000
      };

      mkNoti(
          data['nama'],
          data['pesan'],
          options
      );
      load_counter();
    });


    function load_counter() {
      $.ajax({
        url: '../dashboard/message_counter/',
        type: 'GET',
        async: true,
        dataType: 'text',
        success: function (data) {
          $('.badge-counter').html(data);
        }

      })
      // body...
    }
 


});