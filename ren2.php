<?php
$taro=array("gender"=>"男","hobby"=>"カメラ","age"=>20,"pro"=>"カメラマン");
$ziroko=array("gender"=>"おんな","hobby"=>"デザイン","age"=>22,"pro"=>"デザイナー");
$kurara=array("gender"=>"くらら","hobby"=>"酒","age"=>33,"pro"=>"WEB");
$kawai=array($taro,$ziroko,$kurara);
print_r($kawai);
print $kawai[1]["age"];
?>
