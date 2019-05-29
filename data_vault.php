<?php
$action = $_GET["action"];
$myText = $_POST["mytext"];

if($action = "save") {
  $targetFolder = "/tree/master/src";
  file_put_contents($targetFolder."storage.txt", $myText);
}
