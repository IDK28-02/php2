<form method="post">
    <input type="date" name="data">
    <input type="submit" value="wyślij">
</form>
<?php
if (isset($_POST["data"])) 
{
    $wiek = $_POST["data"];
    $rok=substr($wiek,0,4);
    $miesac=substr($wiek,5,2);
    $dzien=substr($wiek,8,2);
    $wiek=(time()-mktime(0,0,0,$miesac,$dzien,$rok))/(3600*24*365);
    echo "wiek wynosi:".floor($wiek);
}
?>