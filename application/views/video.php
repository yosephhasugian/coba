<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<video width="100%" controls id="myvideo">
  <source src="../assets/videos/jaketbus.mp4" type="video/mp4">
  <source src="rain.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video>

<button onclick="openFullscreen('myvideo');">Open Video in Fullscreen Mode</button>
<script>
function openFullscreen(ID) {
	var elem = document.getElementById(ID);
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.mozRequestFullScreen) { /* Firefox */
    elem.mozRequestFullScreen();
  } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE/Edge */
    elem.msRequestFullscreen();
  }
}
</script>
</body>
</html>