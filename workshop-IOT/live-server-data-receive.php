<?php

// dati prova
//$temp = 24;
//$mac = 'AA:BB:CC:DD:EE';
//$time = time()*1000;

//if arrive a get with temp & time var

$temp = 0;
$hum = 0;
$light = 0;

$val = array();
$time = array();

//READ THE GET REQUEST ONE BY ONE AND SAVE IT (time, temp, hum, light, .....)
if (count($_GET)>0&&isset($_GET["val1"])){
	$val[0] = $_GET["val1"];
    $time[0] = strtotime($_GET["time1"])*1000;
	$fileContent = $time[0]."  ".$val[0];
	$fileStatus = file_put_contents('myFile0.txt',$fileContent);
}

if (count($_GET)>0&&isset($_GET["val2"])){
	$val[1] = $_GET["val2"];
    $time[1] = strtotime($_GET["time2"])*1000;	
	$fileContent = $time[1]."  ".$val[1];
	$fileStatus = file_put_contents('myFile1.txt',$fileContent);
}

if (count($_GET)>0&&isset($_GET["val3"])){
	$val[2] = $_GET["val3"];
    $time[2] = strtotime($_GET["time3"])*1000;	
	$fileContent = $time[2]."  ".$val[2];
	$fileStatus = file_put_contents('myFile2.txt',$fileContent);
}

if (count($_GET)>0&&isset($_GET["val4"])){
	$val[3] = $_GET["val4"];
    $time[3] = strtotime($_GET["time4"])*1000;	
	$fileContent = $time[3]."  ".$val[3];
	$fileStatus = file_put_contents('myFile3.txt',$fileContent);
}

if (count($_GET)>0&&isset($_GET["val5"])){
	$val[4] = $_GET["val5"];
    $time[4] = strtotime($_GET["time5"])*1000;	
	$fileContent = $time[4]."  ".$val[4];
	$fileStatus = file_put_contents('myFile4.txt',$fileContent);
}

if (count($_GET)>0&&isset($_GET["val6"])){
	$val[5] = $_GET["val6"];
    $time[5] = strtotime($_GET["time6"])*1000;	
	$fileContent = $time[5]."  ".$val[5];
	$fileStatus = file_put_contents('myFile5.txt',$fileContent);
}


?>