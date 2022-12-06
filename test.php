<?php
    function getGUIDnoHash(){
        mt_srand((double)microtime()*10000);
        $charid = md5(uniqid(rand(), true));
        $c = unpack("C*",$charid);
        $c = implode("",$c);
        return substr($c,0,17);
}

$uid = getGUIDnoHash();
// echo $uid;
// $fd_acceptedbyadmin = date("Ymd");
// $remarks = 'aisd asdas sdas dasdnas djasnd jadsn jandj';
// $sms = 'Your i-OSCA application #'.$uid. ' is rejected for the following reason:'. ' '. $remarks;   
$fd_acceptedbyadmin = date("Y-m-d");

echo $fd_acceptedbyadmin;
// echo $fd_acceptedbyadmin;
// echo $uid;

?>