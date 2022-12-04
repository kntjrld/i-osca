<?php
    function getGUIDnoHash(){
        mt_srand((double)microtime()*10000);
        $charid = md5(uniqid(rand(), true));
        $c = unpack("C*",$charid);
        $c = implode("",$c);
        return substr($c,0,20);
}

$uid = getGUIDnoHash();
echo $uid;
$fd_acceptedbyadmin = date("Y-m-d");
echo $fd_acceptedbyadmin;
?>