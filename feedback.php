<?php
    session_start();
    if(isset($_POST["FIO"]) && isset($_POST["telephone"]) && isset($_POST["opisanie"])):
        require "db.php";
        $date = date("y.m.d");
        $sql = "INSERT INTO feedback (FIO, Phone_number, Opisanie, Date) VALUES (:FIO, :telephone, :opisanie, :segodna)";
        $query = $pdo->prepare($sql);
        $query->execute(array(
            "FIO" => $_POST["FIO"],
            "telephone" => $_POST["telephone"],
            "opisanie" => $_POST["opisanie"],
            "segodna" => $date
        ));
        header("Location: http://localhost:8000/index.html");
?>
<!DOCTYPE html>
<html lang="RU">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обратная связь</title>
</html>
<body>
    <header>

    </header>
    <main>
        <h2>Обратная связь</h2>
        <form action="" method="post">
            <input type="text" name="FIO" id="FIO" placeholder="ФИО"><br>
            <input type="number" name="telephone" id="telephone" placeholder="Номер телефона"><br>
            <input type="text" name="opisanie" id="opisanie" placeholder="Опишите вашу проблему"><br>
            <button type="submit">Отправить</button>
        <form>
    </main>
    <footer>
        
    </footer>
</body>
<?php endif; ?>