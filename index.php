<?php
require_once('include.php');
echo "
<html>
<head>
<title>Автосалон" . (!isset($_GET['table']) ? "" : " : : " . $values[$_GET['table']]) . "</title>
<script type = 'text/javascript' src = 'script.js'></script>
<link rel = 'stylesheet' type = 'text/css' href = 'style.css' />
<meta http-equiv = 'content-type' content = 'text/html; charset = windows-1251'>
</head>
<body>
<table style = 'width: 100%; height: 100%' cellpadding = '0' cellspacing = '0'>
<tr>
<td>&nbsp;</td>
<td style = 'width: 1200px;' valign = 'top'>
";
if (!isset($_GET["table"]))
{
echo "<center>";
for ($i = 0; $i < count($ids); $i++)
echo "<input type = 'submit' class = 'selection' value = '" . $values[$i] . "' onMouseOver = 'mouseOver(\"" . $i . "\")' onClick = 'mouseClick(\"" . $i . "\")' />";
echo "
<input type = 'hidden' id = 'table' name = 'table' />
</center>";
}
else
{
$length = count($cols[$ids[$_GET['table']]]);
$width = 1020 / $length;
$filter = "%";
for ($i = 1; $i < $length; $i++)
$filter .= "~%";
echo "<br />" . $values[$_GET['table']] . "<br /><br />
<center><table class = 'header'>
<tr>
";
for ($i = 0; $i < $length; $i++)
echo "<td style = 'width: " . $width . "'>" . $cols[$ids[$_GET["table"]]][$i] . "</td>";
echo "
</tr>
</table></center>
<iframe src =' 'table.php?table=" . $ids[$_GET['table']] . "&filter=" . $filter . " allowTransparency = 'true' frameBorder = '0'></iframe>
<a href = '.'>повернутися назад</a>
";
}
echo"
</td>
<td>&nbsp;</td>
</tr>
</table>
</body>
</html>
";
?>
