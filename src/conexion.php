<?php
function retornarConexion() {
  $con=mysqli_connect("localhost","root","","testt");

  return $con;
}

?>