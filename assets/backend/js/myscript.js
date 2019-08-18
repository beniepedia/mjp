  $(document).ready(function(){
      // $('.counter').counterUp({
      //       delay: 10,
      //       time: 1000
      //   });

      
      // const sosial_check = $('#checkbox_sosial');
      // const input_id = $('#fbid, #fbkey, #gid, #gkey');
      // if($(sosial_check).is(':checked'))
      // {
      //   $(input_id).attr('readonly', false);
      // } else {
      //   $(input_id).attr('readonly', true);
      // }

      // $(sosial_check).on('click', function(){
      //  if($(sosial_check).is(':checked'))
      //   {
      //     $(input_id).attr('readonly', false);
      //   } else {
      //     $(input_id).attr('readonly', true);
      //   }
      // });

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

      $('.tgl').datepicker({
        changeMonth: true,
        changeYear: true,
        showAnim: "slideDown",
        dateFormat: 'dd/mm/yy'
      });

      $('.btn-blog').tooltip();

       $("#imgPost, #imgLogo").fileinput({
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

       $('#msg_editor').summernote({
          lang: 'id-ID',
          toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['insert', ['link','table','hr']],
            ['view', ['fullscreen', 'codeview', 'undo', 'redo', 'help']],
          ],
          placeholder: 'Tulis pesan disini.....',
          disableDragAndDrop: true,
          height: 300
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

       $('.form-add-post [name="title"]').on('change', function(){
          const isi = $(this).val();
          $.ajax({
            url: 'slug_category',
            data: {data:isi},
            dataType: 'text',
            type: "POST",
            success: function(response) {
              $('.form-add-post [name="slug"]').val(response);
            }
          })
       });

       setTimeout(function() {
        $(".my-notif").slideUp('alert');
       }, 8000);
});