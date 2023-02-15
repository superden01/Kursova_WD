<?php

$servername="localhost";
$username="root";
$password="123456789";
$database="automag";

$connection=new mysqli($servername,$username,$password,$database);
 
$id_corp=" ";
$id_eng=" ";
$price=" ";
$prod_date=" ";
$color=" ";
$comp=" ";



if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $id_corp = $_POST['id_korpus'];
    $id_eng = $_POST['id_motor'];
    $price = $_POST['cena'];
    $prod_date = $_POST['data_proizvodstva'];
    $color = $_POST['cvet'];
    $comp = $_POST['komplekt'];

    do{
        
        $sql= "INSERT INTO auto (id_korpus, id_motor, cena, data_proizvodstva, cvet, komplekt) " .
                "VALUES ('$id_corp','$id_eng','$price','$prod_date','$color','$comp')";
        $result=$connection->query($sql);

        if(!$result){
            $errorMessage= "Invalid query". $connection->error;
            break;
        }


        $id_corp="";
        $id_eng="";
        $price="";
        $prod_date="";
        $color="";
        $comp="";


        header("Location:/index.php");
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
        <h2>Нове авто</h2>



        <form method="post">
            <div class="row mb-3">
                <lebel class="col-sm-3 col-form-lebel">ID Корпуса</lebel>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="idcorp" value="<?php echo $id_corp;?>">
                </div>
            </div>
            <div class="row mb-3">
                <lebel class="col-sm-3 col-form-lebel">ID Двигуна</lebel>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="ideng" value="<?php echo $id_eng;?>">
                </div>
            </div>
            <div class="row mb-3">
                <lebel class="col-sm-3 col-form-lebel">Ціна</lebel>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="price" value="<?php echo $price;?>">
                </div>
            </div>
            <div class="row mb-3">
                <lebel class="col-sm-3 col-form-lebel">Дата Виготовлення</lebel>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="dateprod" value="<?php echo $prod_date;?>">
                </div>
            </div>
            <div class="row mb-3">
                <lebel class="col-sm-3 col-form-lebel">Колір</lebel>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="color" value="<?php echo $color;?>">
                </div>
            </div>
            <div class="row mb-3">
                <lebel class="col-sm-3 col-form-lebel">Комплект</lebel>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="complect" value="<?php echo $comp;?>">
                </div>
            </div>

 

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Додати</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/index.php" role="button">Скасувати</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>