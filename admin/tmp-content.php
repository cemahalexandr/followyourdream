<script src="plugins/tinymce/tinymce.min.js"></script>
<script>


    tinymce.init({
        selector: '.tinymce',
        images_upload_url: 'formAction/tinymceImgUpload.php',
        images_upload_base_path: '../img/',
        content_css: 'inc/css/tiny.css',
        menubar: false,
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste"
        ],
        toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
        relative_urls: false
    });

    tinymce.init({
        selector: '.modal-list',
        content_css: 'inc/css/tiny.css',
        menubar: false,
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste"
        ],
        toolbar: " styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
        relative_urls: false
    });

</script>

<textarea name="tmpContent" class="modal-list form-control changeImgSrc" rows="3" placeholder="Enter ...">
    <?php echo $db_arr['tmpContent']; ?>
</textarea>
<input type="hidden" name="_wysihtml5_mode" value="1">