<?php
if (isset($_GET["name"])){
    $id=$_GET["name"];

    $servername="localhost";
    $username="root";
    $password="123456789";
    $database="automag";
    
    $connection=new mysqli($servername,$username,$password,$database);

    $sql="DELETE FROM auto WHERE id=$id";
    $connection->query($sql);
}
header("Location:/posada_page.php");
exit;
?>