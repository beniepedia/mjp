    </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/backend/') ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/backend/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/backend/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>
  

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/backend/') ?>js/sb-admin-2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script>
  	$(document).ready(function(){
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
  </script>

</body>

</html>