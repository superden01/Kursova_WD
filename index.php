<!DOCTYPE html>
<html lang="ukr">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Автомагазин</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>Авто</h2>
        <a class="btn btn-primary" href="/create_car.php" role="button">Додати авто</a>
        <a class="btn btn-primary" href="/prodaza_page.php" role="button">Таблиця Продаж</a>
        <a class="btn btn-primary" href="/posada_page.php" role="button">Таблиця Посад</a>
        <a class="btn btn-primary" href="/manufacturer_page.php" role="button">Таблиця Виробників</a>
        <a class="btn btn-primary" href="/workers_page.php" role="button">Таблиця Працівників</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID Авто</th>
                    <th>ID Корпуса</th>
                    <th>ID Двигуна</th>
                    <th>Ціна</th>
                    <th>Дата Виготовлення</th>
                    <th>Колір</th>
                    <th>Комплект</th>
                </tr>
            </thead>
            <tbody>
                <?php
            
                $servername="localhost";
                $username="root";
                $password="123456789";
                $database="automag";
            
                $connection=new mysqli($servername,$username,$password,$database);
              
                if($connection->connect_error){
                    die("Connection failed:" . $connection->connect_error);
                }

                $sql="SELECT * FROM auto";
                $result=$connection->query($sql);
                

                if(!$result){
                    die("Invalid query: " . $connection->error);
                }

                while($row= $result->fetch_assoc()){
                    echo"
                    <tr>
                    <td>$row[id_auto]</td>
                    <td>$row[id_korpus]</td>
                    <td>$row[id_motor]</td>
                    <td>$row[cena]</td>
                    <td>$row[data_proizvodstva]</td>
                    <td>$row[cvet]</td>
                    <td>$row[komplekt]</td>
                    <td>
                        <a class='btn btn-primary btn-sm' href='/edit_car.php?id=$row[id_auto]'>Змінити</a>
                        <a class='btn btn-danger btn-sm' href='/delete_car.php?id=$row[id_auto]'>Видалити</a>
                    </td>
                </tr>
                    ";
                }
                ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>