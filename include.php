<?php $ids = array("avto", "prodazha", "dolzhnosti", "proizvoditel", "sotrudniki");
$values = array("Авто", "Продаж", "Посади", "Виробники", "Співробітники");
$cols = array("avto" => array("ID Авто", "ID Корпуса", "ID Двигуна", "Ціна", "Дата Виготовлення", "Колір", "Комплект"),"dolzhnosti" => array("Посада", "ФІПо-батькові", "Адреса", "Номер телефона"),"prodazha" 
=> array("ID Продажу", "ID Авто", "Ім'я покупця", "Номер паспорту", "Адреса", "Номер телефона"),"proizvoditel" 
=> array("ID Авто", "Марка", "ID Корпуса", "ID Двигуна", "Колір", "Дата Виготовлення", "Дата прибуття", "Комплект", "Ціна"),"sotrudniki" 
=> array("ID Співробітника", "ФІПо-батькові", "Посада", "Адреса", "Номер телефона"));
$myss = array("avto" => array("id_auto", "id_korpus", "id_motor", "cena", "data_proizvodstva", "cvet", "komplekt"),"dolzhnosti" 
=> array("post", "name", "adress", "phone"),"prodazha" 
=> array("id_prodazh", "id_auto", "name_pokupatel", "num_pasport", "adress", "phone"),"proizvoditel" 
=> array("id_auto", "marka", "id_korpus", "id_motor", "cvet", "data_proizvodstva", "data_prihoda", "komplekt", "cena"),"sotrudniki" 
=> array("id_sotrud", "name", "post", "adress", "phone"));

?>
