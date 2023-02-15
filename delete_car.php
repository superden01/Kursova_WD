<?php
if (isset($_GET["id_corp"])){
    $id=$_GET["id_corp"];

    $servername="localhost";
    $username="root";
    $password="123456789";
    $database="automag";
    
    $connection=new mysqli($servername,$username,$password,$database);

    $sql="DELETE FROM auto WHERE id=$id";
    $connection->query($sql);
}
header("Location:/index.php");
exit;
?>