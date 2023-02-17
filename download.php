<?php 
header("Cache-Control: public");
header("Content-Description: File Transfer");
header("Content-Disposition: attachment; filename=\"".$_GET['download']."\"");
header("Content-Type: application/");
header("Content-Transfer-Encoding: binary");
readfile("./downloads/".$_GET['download']);
?>