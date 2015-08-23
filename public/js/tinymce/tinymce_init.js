tinymce.init({
	menubar : false,
  language:'fr_FR',
	selector: "textarea.tiny-editor",
	plugins: [
		"code link fullscreen imageupload media wordcount colorpicker textcolor preview"
	],
	toolbar: "code  undo redo | alignleft aligncenter alignright alignjustify | bold italic underline | fontselect fontsizeselect styleselect | forecolor backcolor | bullist numlist outdent indent | link | imageupload media | fullscreen preview",
	relative_urls: false
});
