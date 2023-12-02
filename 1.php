<form method="post">
    <input type="text" name="im"> 
    <input type="text" name="nz">
    <input type="submit">
    <br> 
</form>
<?php
if (isset($_POST["im"])) 
{
    $x=$_POST["im"];
    $y=$_POST["nz"];
    $imie=substr($x,0,3); // substr... wycina 3 pierwsze liter
    $nazwisko=substr($y,0,3);
    $ll=rand(0,100); // losuje liczbe
    echo "Login:".strtolower($imie.$nazwisko.$ll); // strtolower wszystkie litery małe
}
?>