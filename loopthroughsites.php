<?php
session_start();
?>

<html>

	<body>
		<iframe id="ifrm"></iframe>
	</body>

	<script>
		//insert list of web pages to cycle through here

	
		var ifrm = document.getElementById('ifrm');
		ifrm.src = <?php echo '"' . $_SESSION['pages'][$_SESSION['index'] - 1] . '"'; ?>;

		var displayLength = 2000 //milliseconds

		setTimeout(function(){window.location.reload(true)}, displayLength);

	</script>


<?php
	if ($_SESSION['index'] == count($_SESSION['pages'])){
		$_SESSION['index'] = 0;
	}	
	$_SESSION['index']++;

?>

</html>