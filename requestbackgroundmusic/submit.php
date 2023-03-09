<?php
if(isset($_POST['name']) && isset($_POST['movie-suggestion'])) {
	$name = $_POST['name'];
	$movie_suggestion = $_POST['movie-suggestion'];
	$file = 'bm-suggestions.txt';
	$current = file_get_contents($file);
	$current .= $name . ":" . $movie_suggestion . "\n";
	file_put_contents($file, $current);
	echo "The Background Music That You Requested Will Be Added Shortly!";
}
?>
<script async src="https://arc.io/widget.min.js#xGQdN1dR"></script>