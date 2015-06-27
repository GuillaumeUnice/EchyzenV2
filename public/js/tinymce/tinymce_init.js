tinymce.init({
	menubar : false,
	selector: "textarea",
	plugins: [
		"link bbcode fullscreen imageupload"
	],
	toolbar: "undo redo | bold italic | bullist numlist outdent indent | link | imageupload | fullscreen",
	relative_urls: false
});