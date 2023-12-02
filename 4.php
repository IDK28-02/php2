<form method="post">
    <input type="date" name="data">
    <input type="submit" value="wyślij">
</form>

<?php
if (isset($_POST["data"])) 
{
    $wiek = $_POST["data"];
    $ra=substr($wiek,0,4);
    $ma=substr($wiek,5,2);
    $da=substr($wiek,8,2);
    $rb=date("Y");
    $mb=date("m");
    $db=date("b");
    if ($ma>$mb or ($ma==$mb and $da>$db))
    $dni(mktime(0,0,0,$ma,$da,$rb)-time())/(3600*24);
else 
{
    $dni=(mktime(0,0,0,$ma,$da,$rb+1)-time())/(3600*24);
}
echo "dni do twoich urodzin".floor($dni);
}
?>