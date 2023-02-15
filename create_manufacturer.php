<?php

$servername="localhost";
$username="root";
$password="123456789";
$database="automag";

$connection=new mysqli($servername,$username,$password,$database);
 
$marka=" ";
$Id_korp=" ";
$Id_eng=" ";
$color=" ";
$prod_date=" ";
$come_date=" ";
$kompl=" ";
$price=" ";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $marka = $_POST['marka'];
    $Id_korp = $_POST['id_korpus'];
    $Id_eng = $_POST['id_motor'];
    $color = $_POST['cvet'];
    $prod_date = $_POST['data_proizvodstva'];
    $come_date = $_POST['data_prihoda'];
    $kompl = $_POST['komplekt'];
    $price = $_POST['cena'];

    do{
        
        $sql= "INSERT INTO auto (marka, id_korpus, id_motor, cvet,data_proizvodstva,data_prihoda,komplekt,cena) " .
                "VALUES ('$marka','$Id_korp','$Id_eng','$color','$prod_date','$come_date','$kompl','$price')";
        $result=$connection->query($sql);

        if(!$result){
            $errorMessage= "Invalid query". $connection->error;
            break;
        }

        $marka=" ";
        $Id_korp=" ";
        $Id_eng=" ";
        $color=" ";
        $prod_date=" ";
        $come_date=" ";
        $kompl=" ";
        $price=" ";

        header("Location:/manufacturer_page.php");
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
        <h2>Новий Виробник</h2>
        <form method="post">
            <div class="row mb-3">
                <lebel class="col-sm-3 col-form-lebel">Марка</lebel>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="dateprod" value="<?php echo $marka;?>">
                </div>
            </div>
            <div class="row mb-3">
                <lebel class="col-sm-3 col-form-lebel">ID Корпуса</lebel>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="color" value="<?php echo $Id_korp;?>">
                </div>
            </div>
            <div class="row mb-3">
                <lebel class="col-sm-3 col-form-lebel">ID Двигуна</lebel>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="complect" value="<?php echo $Id_eng;?>">
                </div>
            </div>
            <div class="row mb-3">
                <lebel class="col-sm-3 col-form-lebel">Колір</lebel>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="complect" value="<?php echo $color;?>">
                </div>
            </div>
            <div class="row mb-3">
                <lebel class="col-sm-3 col-form-lebel">Дата виготовлення</lebel>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="complect" value="<?php echo $prod_date;?>">
                </div>
            </div>
            <div class="row mb-3">
                <lebel class="col-sm-3 col-form-lebel">Дата прибуття</lebel>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="complect" value="<?php echo $come_date;?>">
                </div>
            </div>
            <div class="row mb-3">
                <lebel class="col-sm-3 col-form-lebel">Комплект</lebel>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="complect" value="<?php echo $kompl;?>">
                </div>
            </div>
            <div class="row mb-3">
                <lebel class="col-sm-3 col-form-lebel">Ціна</lebel>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="complect" value="<?php echo $price;?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Додати</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/manufacturer_page.php" role="button">Скасувати</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>