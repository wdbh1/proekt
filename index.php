<?php
require "dbconnect.php";
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>proekt</title>
    <style>
        body{
            max-width: max-content;
        }
        *{
            font-family: Tahoma;
            margin: 0 auto;
        }
        .item{

            background-color: pink;
            margin: 20px;
            padding: 10px;
            border-radius: 0px;


        }
        .name{
            vertical-align: top;
            width: 20%;
            max-width: 250px;
            display: inline-block;
        }
    </style>
</head>
<body>
<h1>Кулинарный справочник</h1>
    <?php
    echo "<h2>Работу выполнил студент группы 609-21з.</h2>";
    $result = $conn->query("SELECT * FROM Kategoriya");
    while ($row = $result->fetch()){
?>
        <div class="item">
            <div class="name">
                <?=$row['name']?>
            </div>
        
        </div>
<?php

     }
    ?>


</body>
</html>