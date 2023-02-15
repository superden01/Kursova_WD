<?php

$id_prod=" ";
$id_auto=" ";
$pokupatel=" ";
$pasport=" ";
$adress=" ";
$phone=" ";
$errorMessage="";
$servername="localhost";
$username="root";
$password="123456789";
$database="automag";

$connection=new mysqli($servername,$username,$password,$database);

if ($_SERVER['REQUEST_METHOD']=='GET'){
    
    $id_prod=$_GET["id_korpus"];

    $id_prod = $row['id_prodazh'];
    $id_auto = $row['id_auto'];
    $pokupatel = $row['name_pokupatel'];
    $pasport = $row['num_pasport'];
    $adress = $row['adress'];
    $phone = $row['phone'];
}
else{
    $id_prod = $_POST['id_prodazh'];
    $id_auto = $_POST['id_auto'];
    $pokupatel = $_POST['name_pokupatel'];
    $pasport = $_POST['num_pasport'];
    $adress = $_POST['adress'];
    $phone = $_POST['phone'];
    do{
        if(empty($id_prod)||empty($id_auto)||empty($pokupatel)||empty($pasport)||empty($pasport)||empty($adress)){
            $errorMessage="All the fields are required";
            break;
        }
    $sql="UPDATE auto". "SET id_korpus='$id_prod',id_motor='$id_auto',cena='$pokupatel',data_proizvodstva='$pasport',cvet='$phone',komplekt='$adress'".
    "WHERE id=$id";
    $result=$connection->query($sql);
    
    header("Location:/index.php");
    exit;
    }while(false);
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
        <h2>Зміна інформації</h2>

        <form method="post">
            <div class="row mb-3">
                <lebel class="col-sm-3 col-form-lebel">ID Авто</lebel>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="ideng" value="<?php echo $id_auto;?>">
                </div>
            </div>
            <div class="row mb-3">
                <lebel class="col-sm-3 col-form-lebel">Ім'я покупця</lebel>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="price" value="<?php echo $price;?>">
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
                <lebel class="col-sm-3 col-form-lebel">Номер телефону</lebel>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="complect" value="<?php echo $phone;?>">
                </div>
            </div>

 

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Змінити</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/prodaza_page.php" role="button">Скасувати</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>