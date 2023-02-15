<?php

$servername="localhost";
$username="root";
$password="123456789";
$database="automag";

$connection=new mysqli($servername,$username,$password,$database);
 
$id_prod=" ";
$id_auto=" ";
$pokupatel=" ";
$pasport=" ";
$adress=" ";
$phone=" ";



if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $id_prod = $_POST['id_prodazh'];
    $id_auto = $_POST['id_auto'];
    $pokupatel = $_POST['name_pokupatel'];
    $pasport = $_POST['num_pasport'];
    $adress = $_POST['adress'];
    $phone = $_POST['phone'];
    do{
        
        $sql= "INSERT INTO auto (id_korpus, id_motor, cena, data_proizvodstva, cvet, komplekt) " .
                "VALUES ('$id_prod','$id_auto','$pokupatel','$pasport','$adress','$phone')";
        $result=$connection->query($sql);

        if(!$result){
            $errorMessage= "Invalid query". $connection->error;
            break;
        }


        $id_prod=" ";
        $id_auto=" ";
        $pokupatel=" ";
        $pasport=" ";
        $adress=" ";
        $phone=" ";


        header("Location:/prodaza_page.php");
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
        <h2>Нова продажа</h2>



        <form method="post">
            <div class="row mb-3">
                <lebel class="col-sm-3 col-form-lebel">ID Авто</lebel>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="ideng" value="<?php echo $id_prod;?>">
                </div>
            </div>
            <div class="row mb-3">
                <lebel class="col-sm-3 col-form-lebel">Ім'я покупця</lebel>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="price" value="<?php echo $id_auto;?>">
                </div>
            </div>
            <div class="row mb-3">
                <lebel class="col-sm-3 col-form-lebel">Номер паспорту</lebel>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="dateprod" value="<?php echo $pokupatel;?>">
                </div>
            </div>
            <div class="row mb-3">
                <lebel class="col-sm-3 col-form-lebel">Адреса</lebel>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="color" value="<?php echo $pasport;?>">
                </div>
            </div>
            <div class="row mb-3">
                <lebel class="col-sm-3 col-form-lebel">Номер Телефону</lebel>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="complect" value="<?php echo $phone;?>">
                </div>
            </div>

 

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Додати</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/prodaza_page.php" role="button">Скасувати</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>