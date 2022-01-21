<?php
//header("Content-type: text/json");

//if arrive a get request from livechart.php
if (count($_GET)>0&&isset($_GET['id'])) {

	$id_container = $_GET['id'];
	$filename = 'myFile'.$id_container.'.txt';
	$filedata = file_get_contents($filename);
	$vals = explode("  ", $filedata);
	echo json_encode($vals,JSON_NUMERIC_CHECK);
}

?>