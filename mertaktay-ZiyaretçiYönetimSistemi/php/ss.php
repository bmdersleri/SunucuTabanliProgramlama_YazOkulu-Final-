<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>İsimsiz döküman</title>
<script src="file:///H|/jj.js" type="text/javascript"></script>
</head>

<body>
<video id="video" width="640" height="480" autoplay></video>
<button id="snap">Anlık fotoğraf</button>
<canvas id="canvas" width="640" height="480"></canvas>
</body>
<script>

var video = document.getElementById('video');

// Get access to the camera!
if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
    // Not adding `{ audio: true }` since we only want video now
    navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
        video.src = window.URL.createObjectURL(stream);
        video.play();
    });
}

// Elements for taking the snapshot
var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');
var video = document.getElementById('video');

// Trigger photo take
document.getElementById("snap").addEventListener("click", function() {
	context.drawImage(video, 0, 0, 640, 480);
});

</script>
</html>