function mouseOver(val)
{
document.getElementById("table").value = val;
}
function mouseClick(val)
{
document.location = ".?table=" + val;
}
function deleteClick(tb, id)
{
document.location = "action.php?action=delete&table=" + tb + "&id=" + id;
}
function addClick(tb, co)
{
val = document.getElementById("val0").value;
for (var i = 1; i < co; i++)
val += "~" + document.getElementById("val" + i).value;
document.location = "action.php?action=add&table=" + tb + "&val=" + val;
}
function filClick(tb, co)
{
fil = document.getElementById("fil0").value;
for (var i = 1; i < co; i++)
fil += "~" + document.getElementById("fil" + i).value;
document.location = "table.php?table=" + tb + "&filter=" + fil;
}
function chClick(id_auto, name_pokupatel, cena)
{
parent.document.location = "ch.php?id_auto=" + id_auto + "&name_pokupatel=" + name_pokupatel + "&cena=" + cena;
}
