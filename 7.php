<form method="post">
    <input type="number" name="ile">
    <input type="submit" value="wyślij">
     </form>
<?php
if(isset($_POST["ile"]))
{
    $x=$_POST["ile"];
    for($i=0;$i<$x;$i++)
    {
        $t[$i]=rand(0,100);
        echo $t[$i]." ";
    }
    sort($t);
    echo "<br>";
    for($i=0;$i<$x;$i++)
    echo $t[$i]." ";
    rsort($t);
    echo "<br>";
    for($i= 0;$i<$x;$i++)
    echo $t[$i]." ";
}
?>