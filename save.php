<?php
	$reuslt = $_POST['result'];
echo $reuslt;
	$file_name = $_POST['fileName'];
	$file_name = $file_name.".txt";
	$file = fopen($file_name,'wa');
	//$reuslt = explode('@@@',$reuslt);
	//for($i=0; $i<count($reuslt); $i++){
		//fwrite($file,$reuslt[$i]);
	//}
	fwrite($file,$reuslt);
	fclose($file);
?>
