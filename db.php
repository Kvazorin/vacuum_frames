<?php 
    $connect = mysqli_connect('localhost','root','','rundt');
    mysqli_set_charset($connect,'utf8');
    if(!$connect) {
        printf("Невозможно подключиться к бд. Код ошибки: %s\n", mysqli_connect_error());
        exit();
    }
?>
