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

if( $_POST['id'] != ""
    && $_POST['title'] != ""
    && $_POST['content'] != ""
    && $_POST['userid'] != ""){
    $ad = new AdsController("Edit", $_POST['id']."|".$_POST['title']."|".$_POST['content']."|".$_POST['userid']);
    // echo $_POST['id']." | ".$_POST['title']." | ".$_POST['content']." | ".$_POST['userid'];
}
else{
    $ad = new AdsController("Index");
}
$ad->executeAction();