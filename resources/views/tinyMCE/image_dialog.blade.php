<html>
    <head>
        <meta charset="UTF-8">
        <title>Image Upload Dialog</title>
    </head>
    <body>
        @include('general.form_notification')
        @include('general.flash_message')
        <div class="container">
                <div id="upload_form">
                    <p>
                        <!-- Change the url here to reflect your image handling controller -->
                        {!! Form::open(array('url' => 'upload_image', 'method' => 'POST', 'files' => true, 'target' => 'upload_target')) !!}
                        {!! Form::file('imagefile', array('onChange' => 'this.form.submit(); ImageUpload.inProgress();')) !!}
                        {{-- Form::submit('Envoyer') --}}
                        {!! Form::close() !!}
                    </p>
                </div>
                <div id="image_preview" style="display:none; font-style: helvetica, arial;">
                    <iframe frameborder=0 scrolling="no" id="upload_target" name="upload_target" height=240 width=320></iframe>
                </div>
            <script type="text/javascript" src="{{ asset('js/tinymce/plugins/imageupload/upload.js') }}"></script>
        </div>
    </body>
</html>

