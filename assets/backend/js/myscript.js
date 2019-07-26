  $(document).ready(function(){
      const sosial_check = $('#checkbox_sosial');
      const input_id = $('#fbid, #fbkey, #gid, #gkey');
      if($(sosial_check).is(':checked'))
      {
        $(input_id).attr('readonly', false);
      } else {
        $(input_id).attr('readonly', true);
      }

      $(sosial_check).on('click', function(){
       if($(sosial_check).is(':checked'))
        {
          $(input_id).attr('readonly', false);
        } else {
          $(input_id).attr('readonly', true);
        }
      });

      $("#wizard-picture").change(function(){
        readURL(this);
      });

      function readURL(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();

              reader.onload = function (e) {
                  $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
              }
              reader.readAsDataURL(input.files[0]);
          }
      }

      $(".btn-edit").on('click', function(e){
        e.preventDefault();
        $(".btn-edit").css('display','none');
        $(".btn-save").css('display','block');
        $(".btn-cancel").css('display','block');
        $(".user-profil").attr('readonly', false);
        $(".user-profil").attr('disabled', false);

      });

      $('#tgl').datepicker({
          format: "dd/mm/yyyy",
          language: "id",
          autoclose: true
      });

      $('.btn-blog').tooltip();

      $('#contenteditor').summernote({
        placeholder: 'Tulis postingan disini.....',
        tabsize: 2,
        height: 300
      });

       $("#imgPost").fileinput({
            'theme': 'explorer-fas',
            'uploadUrl': "<?= base_url('email') ?>",
            overwriteInitial: false,
            initialPreviewAsData: true,
            dropZoneEnabled: false,
            showUpload: false,
        });


    });