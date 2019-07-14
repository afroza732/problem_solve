<?php

	function myfunction($str){
		$detail = array("type" => ':',"currency"=>$str, "value" => array("usd", "cad"));
		echo json_encode($detail);	 
			
	}
	
	myfunction('bkash');

?>