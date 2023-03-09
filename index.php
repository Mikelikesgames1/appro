<html>
  <head>
<script async src="https://arc.io/widget.min.js#WpKp1L5M"></script>
    <title>Pro</title>
      <link href="/proton/style.css" rel="stylesheet" type="text/css" media="all">
  </head>
  <body>
    <center><h1>Atom Portal Pro</h1><center>

  <audio id="myAudio" loop>
		<source src="../music.mp3" type="audio/mpeg">
	</audio>

	<center><button class="offlinemc" onclick="playAudio()">Play Background Music</button></center>
    <p></p>
	<center><button class="onlinemc" onclick="stopAudio()">Stop Background Music</button></center>

	<script>
		var audio = document.getElementById("myAudio");

		function playAudio() {
			audio.play();
		}

		function stopAudio() {
			audio.pause();
			audio.currentTime = 0;
		}
	</script>
    <p></p>
  <center><a href="/requestbackgroundmusic/requestbackgroundmusic.php"><button class="playminecraft">Request Background Music</button></a></center>
  <p></p>
    <center><a href="/proton/index.php"><button class="playminecraft">Proton Pro (Games)</button></a></center>
    
    <p></p>
    
    <center><a href="/neutron/index.php"><button class="cookieclicker">Neutron Pro (Movies And Series)</button></a></center>
    
    <p></p>
    
    <center><a href="/electron/index.php"><button class="offlinemc">Electron Pro (Prox!es)</button></a></center>
    
    <p></p>
    
    <p></p>
    
    <center>
      <a href="watchyoutube.php">
      <button class="onlinemc">Watch Youtube</button></a></center>
    <p></p>
  
    

<p></p>

  </body>
</html>