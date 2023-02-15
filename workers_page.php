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
        <h2>Співробітники</h2>
        <a class="btn btn-primary" href="/create-worker.php" role="button">Додати Співробітника</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID Співробітника</th>
                    <th>Ім'я</th>
                    <th>Посада</th>
                    <th>Адреса</th>
                    <th>Телефон</th>
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

                $sql="SELECT * FROM sotrudniki";
                $result=$connection->query($sql);
                

                if(!$result){
                    die("Invalid query: " . $connection->error);
                }

                while($row= $result->fetch_assoc()){
                    echo"
                    <tr>
                    <td>$row[id_sotrud]</td>
                    <td>$row[name]</td>
                    <td>$row[post]</td>
                    <td>$row[adress]</td>
                    <td>$row[phone]</td>
                    <td>
                        <a class='btn btn-primary btn-sm' href='/edit_worker.php?id=$row[id_sotrud]'>Змінити</a>
                        <a class='btn btn-danger btn-sm' href='/delete_worker.php?id=$row[id_sotrud]'>Видалити</a>
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