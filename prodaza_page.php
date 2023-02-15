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
        <h2>Продаж</h2>
        <a class="btn btn-primary" href="/create_prodaza.php" role="button">Додати продажу</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID Продаж</th>
                    <th>ID Авто</th>
                    <th>Ім'я покупця</th>
                    <th>Номер паспорту</th>
                    <th>Адреса</th>
                    <th>Номер Телефону</th>
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

                $sql="SELECT * FROM prodazha";
                $result=$connection->query($sql);
                

                if(!$result){
                    die("Invalid query: " . $connection->error);
                }

                while($row= $result->fetch_assoc()){
                    echo"
                    <tr>
                    <td>$row[id_prodazh]</td>
                    <td>$row[id_auto]</td>
                    <td>$row[name_pokupatel]</td>
                    <td>$row[num_pasport]</td>
                    <td>$row[adress]</td>
                    <td>$row[phone]</td>
                    <td>
                        <a class='btn btn-primary btn-sm' href='/edit_prodaza.php?id=$row[id_prodaza]'>Змінити</a>
                        <a class='btn btn-danger btn-sm' href='/delete_prodaz.php?id=$row[id_prodaza]'>Видалити</a>
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