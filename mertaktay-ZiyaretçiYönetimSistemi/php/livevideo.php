<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>İsimsiz döküman</title>
</head>

<body>
<video id="video" width="180" height="135" autoplay></video>
<button type="button" id="snap" class="btn">Snap Photo</button>
<button type="button" onClick="vidOn()" class="btn1" >Start</button>
<button type="button" onClick="vidOff()" class="btn1" >Stop</button>

        <canvas id="canvas" width="180" height="135"></canvas>
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


var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');
var video = document.getElementById('video');

// Trigger photo take
document.getElementById("snap").addEventListener("click", function() {
	context.drawImage(video, 0, 0, 180, 135);
 var canvasData = canvas.toDataURL("image/png");
document.getElementById('a').value=canvasData;

 });
function vidOff() {
    video.pause();
    video.src = "";

}
function vidOn() {
  var video = document.getElementById('video');

// Get access to the camera!
if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
    // Not adding `{ audio: true }` since we only want video now
    navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
        video.src = window.URL.createObjectURL(stream);
        video.play();
    });
}


var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');
var video = document.getElementById('video');

// Trigger photo take
document.getElementById("snap").addEventListener("click", function() {
	context.drawImage(video, 0, 0, 200, 30);
	
  });
	
}

</script>



</html>

