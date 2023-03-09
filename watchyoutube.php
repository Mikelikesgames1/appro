<link rel="stylesheet" href="/proton/style.css">
<form id="form">
  <center><input type="text" id="video-id"></center>
  <center><h1>Put A Youtube Video Id Above Me!</h1></center>
  <center><button class="playminecraft" type="submit">Watch Video</button></center>
  <p></p>
</form>
<a href="howtousewatchyoutube.php"><center><button class="playminecraft">How To Use?</button></center></a>
<center><iframe id="youtube-player" width="1300" height="650" src="https://www.youtube-nocookie.com/embed/MmB9b5njVbA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in- picture; web-share" allowfullscreen></iframe></center>
<center><script>
const form = document.getElementById("form");
const youtubePlayer = document.getElementById("youtube-player");
const videoIdInput = document.getElementById("video-id");

form.addEventListener("submit", event => {
  event.preventDefault();
  const videoId = videoIdInput.value;
  youtubePlayer.src = `https://www.youtube-nocookie.com/embed/${videoId}`;
});

</script></center>
<script async src="https://arc.io/widget.min.js#xGQdN1dR"></script>