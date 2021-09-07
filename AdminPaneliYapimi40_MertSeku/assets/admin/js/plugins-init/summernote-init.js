jQuery(document).ready(function() {
    $(".summernote").summernote({
        height: 250,
        minHeight: null,
        maxHeight: null,
        focus: !1,
		callbacks: {
			onImageUpload: function(files) {
				sendFile(files[0])
			}
		}
    }), $(".inline-editor").summernote({
        airMode: !0
    })

	function sendFile(file) {
		var data = new FormData();
		data.append("dosya", file);
		$.ajax({
			data: data,
			type: "POST",
			url: site + "ajax?yukle=editor",
			cache: false,
			contentType: false,
			processData: false,
			success: function(url) {
				var data = JSON.parse(url)
				console.log(data);

				$(".summernote").summernote("insertImage", data.url);
			}
		});
	}

}), window.edit = function() {
    $(".click2edit").summernote()
}, window.save = function() {
    $(".click2edit").summernote("destroy")
};
