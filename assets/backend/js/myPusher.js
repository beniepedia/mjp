$(document).ready(function(){
	

    // Enable pusher logging - don't include this in production
    // Pusher.logToConsole = true;

    var pusher = new Pusher('64116644fe77e7ebfb2f', {
      cluster: 'ap1',
      forceTLS: true
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {

      alert(JSON.stringify(data));
    });




    $('#tes-btn').on('click', function(){
    	 mkNoti(
		    'MK Web Notifications (Info)',
		    'Example of generated notification with status Info',
		    { sound: true }
		);
    });






});