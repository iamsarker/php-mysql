<?php
	$cells = array("015xxxxxxxx", "017xxxxxxxx", "018xxxxxxxx", "019xxxxxxxx");
	$msgs = "This is test text sms from web to mobile.";
	sendSMS($cells, $msgs);

	function sendSMS($receivers, $messages){
		//$receivers = array("015xxxxxxxx", "017xxxxxxxx", "018xxxxxxxx", "019xxxxxxxx");

		if( !empty($receivers) && !empty($messages) ){
			$messages = addslashes($messages);
			foreach ($receivers as $receiver) {
				$apiURL = "";
				$ci = curl_init();
				curl_setopt($ci, CURLOPT_SSL_VERIFYPEER, false);
				curl_setopt($ci, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ci, CURLOPT_URL,$apiURL);
				$result = curl_exec($ci);
				curl_close($ci);
				echo $result;
			}
		}
	}
?>