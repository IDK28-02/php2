<form method="post">
    <input type="text" name="im">
    <input type="submit" value="wyślij">

</form>
<?php
if (isset($_POST["im"])) 
{
    $x=$_POST["im"];
    echo $x."<br>";
    echo strlen($x)."<br>"; // liczba znaków 
    if ($x[strlen($x)-1]== "a")
    {
        echo "kobieta";
    }
    else
    {
        echo "mężczyzna";
    }

}
?>