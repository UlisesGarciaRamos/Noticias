<?php
$link=mysql_connect("localhost", "root", "root");
mysql_select_db("proyecto",$link) OR DIE ("Error: No es posible establecer la conexión");
?>