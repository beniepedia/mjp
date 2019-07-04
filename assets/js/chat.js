$(document).ready(function(){
	window.intergramId = "168011709";
    window.intergramCustomizations = {
        titleClosed: 'Closed chat title',
        titleOpen: 'Admin MJP-PARFUME',
        introMessage: 'Selamat datang di website ID MJ-PARFUME, ada yang bisa kami bantu?',
        autoResponse: 'Terima kasih atas pesan anda, segera mungkin kami akan merespon pesan anda!',
        autoNoResponse: 'Saat ini kami sedang sibuk, silahkan hubungi kami beberapa menit lagi. ' +
                        'atau silakan tinggalkan pesan melalui menu kontak. terima kasih!',
        mainColor: "#E91E63", // Can be any css supported color 'red', 'rgb(255,87,34)', etc
        alwaysUseFloatingButton: true // Use the mobile floating button also on large screens
    };

    const pesan = $('.pesanNotif').data('pesan');     
        const error = $('.pesanNotif').data('error');    
        const title = $('.pesanNotif').data('title');     
        if(pesan)
        {   
            Swal.fire({ 
              type: error,  
              title: title, 
              html: pesan   
            }); 
        }   
});