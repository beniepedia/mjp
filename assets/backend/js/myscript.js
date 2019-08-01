  $(document).ready(function(){
      // $('.counter').counterUp({
      //       delay: 10,
      //       time: 1000
      //   });

      
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

       $("#imgPost").fileinput({
            'theme': 'explorer-fas',
            // 'uploadUrl': "upload_image",
            overwriteInitial: false,
            initialPreviewAsData: true,
            dropZoneEnabled: false,
            showUpload: false,
        });

       $('#contenteditor').summernote({
        placeholder: 'Tulis postingan disini.....',
        height: 615,
          callbacks: {
              onImageUpload: function(image) {
                  uploadImage(image[0]);
              },
              onMediaDelete : function(target) {
                  deleteImage(target[0].src);
              }
          }
        });
       // fungsi summernote
       function uploadImage(image) {
          var data = new FormData();
          data.append("image", image);
          $.ajax({
              url: "upload_image",
              cache: false,
              contentType: false,
              processData: false,
              data: data,
              type: "POST",
              success: function(url) {
                  $('#contenteditor').summernote("insertImage", url);
              },
              error: function(data) {
                  console.log(data);
              }
          });
      }

      function deleteImage(src) {
        $.ajax({
            data: {src : src},
            type: "POST",
            url: "delete_image",
            cache: false,
            success: function(response) {
                console.log(response);
            }
        });
      }

       $('#imagepost').dropify({
            messages: {
                default: 'Drag atau drop untuk memilih gambar',
                replace: 'Ganti',
                remove:  'Hapus',
                error:   'error'
            }
      });
});