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
        <h2>Виробники</h2>
        <a class="btn btn-primary" href="/create_manufacturer.php" role="button">Додати Виробника</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID Авто</th>
                    <th>Марка</th>
                    <th>ID Корпуса</th>
                    <th>ID Двигуна</th>
                    <th>Колір</th>
                    <th>Дата виготовлення</th>
                    <th>Дата прибуття</th>
                    <th>Комплект</th>
                    <th>Ціна</th>
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

                $sql="SELECT * FROM proizvoditel";
                $result=$connection->query($sql);
                

                if(!$result){
                    die("Invalid query: " . $connection->error);
                }

                while($row= $result->fetch_assoc()){
                    echo"
                    <tr>
                    <td>$row[id_auto]</td>
                    <td>$row[marka]</td>
                    <td>$row[id_korpus]</td>
                    <td>$row[id_motor]</td>
                    <td>$row[cvet]</td>
                    <td>$row[data_proizvodstva]</td>
                    <td>$row[data_prihoda]</td>
                    <td>$row[komplekt]</td>
                    <td>$row[cena]</td>
                    <td>
                        <a class='btn btn-primary btn-sm' href='/edit_manufacturer.php?id=$row[id_auto]'>Змінити</a>
                        <a class='btn btn-danger btn-sm' href='/delete_manufacturer.php?id=$row[id_auto]'>Видалити</a>
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