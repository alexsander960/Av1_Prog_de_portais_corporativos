<?php

$cx = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($cx, "mvc_webservice");
$sql = mysqli_query($cx, "SELECT * FROM usuario") or die( 
    mysqli_error($cx)
  );

  while($aux = mysqli_fetch_assoc($sql)) { 
    echo "-----------------------------------------<br />"; 
    echo "usuario_id:".$aux["usuario_id"]."<br />"; 
    echo "usuario:".$aux["usuario"]."<br />"; 
  }

?>