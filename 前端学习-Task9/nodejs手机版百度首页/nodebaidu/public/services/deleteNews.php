<?php
	header("Content-type:application/json;charset=utf-8");
	require_once('mysqlHelper.php');
	if($link){
		$newsid=$_POST['newsid'];
		$sql = "DELETE FROM `news` WHERE `news`.`id`={$newsid}";
		mysqli_query($link,"SET NAMES utf8");
		$result = mysqli_query($link,$sql);
		echo json_encode(array('delete'=>'ok'));
	}
	mysqli_close($link);
?>