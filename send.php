<?php
$username	= "iansangaji_";
$number		= readline("Number  : ");
$pesan		= readline("Message : ");
$sendmess	= json_decode(file_get_contents("https://api.iansangaji.co/sms/sms.php?pesan=".urlencode($pesan)."&no=".$number."&user=".$username));
$success = $sendmess->output->message;
if($success == "success"){
	echo "=====================\n";
	echo "Status  : ".$sendmess->output->message."\n";
}else{
	echo $sendmess->output->message."\n";
	exit();
}
?>
