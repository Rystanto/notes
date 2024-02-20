<?php
require_once("Database.php");
$id = $_POST['id'];
$xnote = $_POST['notes'];
$sql2 = update("note", $xnote,$id);
if ($sql2) {
    header("location:Notes.php");
}
?>