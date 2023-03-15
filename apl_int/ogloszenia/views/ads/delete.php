<?php

require_once "../../config.php";
foreach(glob("../../app/*.php") as $filename){
    include $filename;
}

foreach(glob("../../controllers/*.php") as $filename){
    include $filename;
}

foreach(glob("../../models/*.php") as $filename){
    include $filename;
}

if($_GET['id'] != ""){
    $ad = new AdsController("Delete", $_GET['id']);
}
else{
    $ad = new AdsController("Index");
}
$ad->executeAction();