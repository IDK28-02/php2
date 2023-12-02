<?php
if (isset($_COOKIE["odw"]))
$ile=$_COOKIE["odw"]+1;
else
    $ile=1;
echo"jesteś ma stronie po raz: ".$ile;
setcookie("odw",$ile,time()+3600*24);

?>