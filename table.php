<?php
require_once('include.php');
echo "
<html>
<head>
<script type = 'text/javascript' src = 'script.js'></script>
<link rel = 'stylesheet' type = 'text/css' href = 'style.css' />
<meta http-equiv = 'content-type' content = 'text/html; charset = ibm866'>
</head>
<body>
";
if (isset($_GET["filter"]))
{
    $servername = "localhost";
    $database = "automag";
    $username = "root";
    $password = "123456789";
    $conn = mysqli_connect($servername, $username, $password, $database);
$q = "select * from " . $_GET["table"] . " where ";
$exp = explode("~", $_GET["filter"]);
for ($i = 0; $i < count($exp); $i++)
{
$q .= $myss[$_GET["table"]][$i] . " like '" . $exp[$i] . "'";
if ($i < count($exp) - 1)
$q .= " and ";
}
$q = mysql_query($q);
echo "<center><table cellpadding = '0' style = 'margin-left: " . ($_GET["table"] == "prodazha" ? "0" : "44") . "px;'>";
$length = count($cols[$_GET["table"]]);
$width = 1020 / $length;
while ($f = mysql_fetch_array($q))
{
echo "<tr>";
if ($_GET["table"] == "prodazha")
{
$fun = mysql_query("select p.id_auto, name_pokupatel, cena from prodazha p, proizvoditel where p.id_auto = " . $f[1]);
$funf = mysql_fetch_array($fun);
echo "<td style = 'cursor: pointer;' onClick = 'chClick(" . $funf[0] . ", \"" . $funf[1] . "\", \"" . $funf[2] . "\")'><img src = 'ch.png' /></td>";
}
for ($i = 0; $i < $length ; $i++)
echo "<td style = 'border: solid 1px transparent; width: " . $width . ";'>" . $f[$i] . "</td>";
echo "
<td style = 'cursor: pointer;' onClick = 'deleteClick(\"" . $_GET["table"] . "\", " . $f[0] . ")'><img src = 'del.png' /></td>
</tr>";
}
echo "<tr>";
if ($_GET["table"] == "prodazha")
echo "<td style = 'width: 30px;'></td>";
for ($i = 0; $i < $length ; $i++)
echo "<td style = 'width: " . $width . "'><input id = 'val" . $i . "' type = 'text' style = 'width: " . $width . "' /></td>";
echo "

</tr>";
if ($_GET["table"] == "prodazha")
echo "<td style = 'width: 30px;'></td>";
for ($i = 0; $i < $length ; $i++)
echo "<td style = 'width: " . $width . "'><input id = 'fil" . $i . "' type = 'text' style = 'width: " . $width . "' value = '%' /></td>";
echo "
<td style = 'cursor: pointer;' onClick = 'filClick(\"" . $_GET["table"] . "\", " . $length . ")'><img src = 'fil.png' /></td>
</tr>
</table></center>
";
mysql_close($conn);
}
echo "
</body>
</html>
";
?>
