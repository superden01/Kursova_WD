<?php
require_once('include.php');
function redirect($path)
{ echo "<meta http-equiv = 'refresh' content = '0; " . $path . "'>"; }
if (isset($_GET["action"], $_GET["table"]))
{
    $servername = "localhost";
    $database = "automag";
    $username = "root";
    $password = "123456789";
    $conn = mysqli_connect($servername, $username, $password, $database);
$prims = array("avto" => "id_auto", "dolzhnosti" => "post", "prodazha" => "id_prodazh", "proizvoditel" => "id_prodazh", "proizvoditel" => "id_auto", "sotrudniki" => "id_sotrud");
if (isset($_GET["id"]) && $_GET["action"] == "delete")
mysql_query("delete from " . $_GET["table"] . " where " . $myss[$_GET["table"]][0] . " = " . $_GET["id"]);
elseif (isset($_GET["val"]) && $_GET["action"] == "add")
{
$exp = explode("~", $_GET["val"]);
if ($exp[0] == "")
{
$q = mysql_query("select max(" . $myss[$_GET["table"]][0] . ") from " . $_GET["table"]);
$f = mysql_fetch_array($q);
$exp[0] = $f[0] + 1;
}
$q = "insert into " . $_GET["table"] . " values";
for ($i = 0; $i < count($exp); $i++)
$q .= "'" . $exp[$i] . "', ";
$q = substr($q, 0, strlen($q) - 2) . ")";
mysql_query($q);
}
$length = count($cols[$_GET["table"]]);
$filter = "%";
for ($i = 1; $i < $length; $i++)
$filter .= "~%";
redirect("table.php?table=" . $_GET["table"] . "&count=" . $length . "&filter=" . $filter);
mysql_close($conn);
}
?>
