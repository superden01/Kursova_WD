<?php
if (isset($_GET["id_auto"]) && isset($_GET["name_pokupatel"]) && isset($_GET["cena"]))
{
echo "
<html><head>
<meta http-equiv = 'content-type' content = 'text/html; charset = windows-1251'>
<title>Чек</title>
</head>
<body>
<center><table>
<tr><td style = 'height: 300px; padding: 20px;'>
<table><tr>
<td valign = 'top'>
<table style = 'font-size: 20px; font-weight: bold; margin-top: 8px;'>
<tr><td align = 'right'>ID Авто:</td></tr>
<tr><td align = 'right'>Имя покупця:</td></tr>
<tr><td align = 'right'>Ціна:</td></tr>
</table>
</td>
<td valign = 'top'>
<iframe src = 'iframe.php?id_auto=" . $_GET["id_auto"] . "&name_pokupatel=" . $_GET["name_pokupatel"] . "&cena=" . $_GET["cena"] . "' allowTransparency = 'true' frameBorder = '0'></iframe>
</td>
</tr></table>
</td></tr>
</table>
";
}
echo "<br /><br /><a href = '.'> повернутися назад</a></center></body></html>";
?>
