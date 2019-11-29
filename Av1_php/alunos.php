<?php

$cx = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($cx, "mvc_webservice");
$sql = mysqli_query($cx, "SELECT * FROM aluno") or die( 
    mysqli_error($cx)
  );

  while($aux = mysqli_fetch_assoc($sql)) { 
    echo "-----------------------------------------<br />"; 
    echo "id:".$aux["id"]."<br />"; 
    echo "ra:".$aux["ra"]."<br />"; 
    echo "nome:".$aux["nome"]."<br />";
    echo "curso:".$aux["curso"]."<br />";
    echo "disciplina:".$aux["disciplina"]."<br />";
    echo "email:".$aux["email"]."<br />";
  }

?>