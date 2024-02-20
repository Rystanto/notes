<?php 
require_once("Database.php");
$id = $_GET['id'];
$data = hapusData("note",$id);
if ($data) {
    header ("location:Notes.php");
}
?>