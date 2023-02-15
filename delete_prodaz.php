<?php
if (isset($_GET["id_prodazh"])){
    $id=$_GET["id_prodazh"];

    $servername="localhost";
    $username="root";
    $password="123456789";
    $database="automag";
    
    $connection=new mysqli($servername,$username,$password,$database);

    $sql="DELETE FROM auto WHERE id=$id";
    $connection->query($sql);
}
header("Location:/prodaza_page.php");
exit;
?>