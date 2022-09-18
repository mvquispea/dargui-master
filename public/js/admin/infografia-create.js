/*=========================================================================================
	File Name: article-create.js
	Description: field select2 and quill editor JS
	----------------------------------------------------------------------------------------
==========================================================================================*/
(function (window, document, $) {
    'use strict';
  
    var select = $('.select2');
    // var editor = '#blog-editor-container .editor';
    var blogFeatureImage = $('#blog-feature-image');
    var blogImageInput = $('#infografiaImage');
  
    // Basic Select2 select
    select.each(function () {
      var $this = $(this);
      $this.wrap('<div class="position-relative"></div>');
      $this.select2({
        // the following code is used to disable x-scrollbar when click in select input and
        // take 100% width in responsive also
        dropdownAutoWidth: true,
        width: '100%',
        dropdownParent: $this.parent()
      });
    });
  
    // Change featured image
    if (blogImageInput.length) {
      $(blogImageInput).on('change', function (e) {
        var reader = new FileReader(),
          files = e.target.files;
        reader.onload = function () {
          if (blogFeatureImage.length) {
            blogFeatureImage.attr('src', reader.result);
          }
        };
        reader.readAsDataURL(files[0]);
      });
    }

  })(window, document, jQuery);