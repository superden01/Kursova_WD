<?php

$servername="localhost";
$username="root";
$password="123456789";
$database="automag";

$connection=new mysqli($servername,$username,$password,$database);
 
$name=" ";
$dolg=" ";
$adress=" ";
$phone=" ";


if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $name = $_POST['name'];
    $dolg = $_POST['post'];
    $adress = $_POST['adress'];
    $phone = $_POST['phone'];

    do{
        
        $sql= "INSERT INTO auto (name, post, adress, phone) " .
                "VALUES ('$name','$dolg','$adress','$phone')";
        $result=$connection->query($sql);

        if(!$result){
            $errorMessage= "Invalid query". $connection->error;
            break;
        }

        $name=" ";
        $dolg=" ";
        $adress=" ";
        $phone=" ";
        
        header("Location:/workers_page.php");
        exit;
    } while (false);
}
?>
<!DOCTYPE html>
<html lang="ukr">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Автомагазин</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container my-5">
        <h2>Новий Співробітник</h2>
        <form method="post">
            <div class="row mb-3">
                <lebel class="col-sm-3 col-form-lebel">Ім'я</lebel>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="dateprod" value="<?php echo $name;?>">
                </div>
            </div>
            <div class="row mb-3">
                <lebel class="col-sm-3 col-form-lebel">Посада</lebel>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="color" value="<?php echo $dolg;?>">
                </div>
            </div>
            <div class="row mb-3">
                <lebel class="col-sm-3 col-form-lebel">Адреса</lebel>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="complect" value="<?php echo $adress;?>">
                </div>
            </div>
            <div class="row mb-3">
                <lebel class="col-sm-3 col-form-lebel">Телефон</lebel>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="complect" value="<?php echo $phone;?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Додати</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/workers_page.php" role="button">Скасувати</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>