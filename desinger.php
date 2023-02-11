
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <title>Конструктор</title>
  </head>
  <body>
    <header class="header">
      <div class="header__inner">
        <div class="container header__container">
          <div class="header__logo logo">
            <a href="#" class="logo__link">
              <img
                src="assets/img/logo.png"
                alt="logo__img"
                class="logo__img"
              />
            </a>
          </div>
          <nav class="header__nav nav">
            <ul class="nav__list list">
              <li class="nav__list-item">
                <a href="#" class="nav__list-link link">Главная</a>
              </li>
              <li class="nav__list-item">
                <a href="#" class="nav__list-link link">О компании</a>
              </li>
              <li class="nav__list-item">
                <a href="#" class="nav__list-link link">Партнерам</a>
              </li>
              <li class="nav__list-item">
                <a href="#" class="nav__list-link link">Конструктор</a>
              </li>
              <li class="nav__list-item">
                <a href="#" class="nav__list-link link">Обратная связь</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <main>
        <?php
          if(isset($_POST["course"]) && isset($_POST["course_1"]) && isset($_POST["course"]) && isset($_POST["FIO"]) && isset($_POST["telephone"])):
            require "db.php";
            $sql = "INSERT INTO desinger (Packaging, Delivery_method, Illumination, Phone_number, FIO) VALUES (:packaging, :delivery, :illumination, :telephone, :FIO)";
            $query = $pdo->prepare($sql);
            $query->execute(array(
              "packaging" => $_POST["course_2"],
              "delivery" => $_POST["course_1"],
              "illumination" => $_POST["course"],
              "telephone" => $_POST["telephone"],
              "FIO" => $_POST["FIO"],
            ));
            header("Location: http://localhost:8000/index.php");
            endif;
        ?>
        <h2>Выбор расцветки</h2>
        <form action="" method="post">
          <input type="radio" name="course" value="Красный"/>Красный <br>
          <input type="radio" name="course" value="Зеленый"/>Зеленый <br>
          <input type="radio" name="course" value="Желтый"/>Желтый <br>
        <form>
        <h2>Выбор доставки</h2>
        <form action="" method="post">
          <input type="radio" name="course_1" value="Машина"/>Машина<br>
          <input type="radio" name="course_1" value="Вертолет"/>Вертолет<br>
          <input type="radio" name="course_1" value="Курьер"/>Курьер<br>
        <form>
        <h2>Выбор упаковки</h2>
        <form action="" method="post">
          <input type="radio" name="course_2" value="Обычная"/>обычная<br>
          <input type="radio" name="course_2" value="Новогодняя"/>новогодняя<br>
        <form>
        <h2>Напишите как вас зовут и номер телефона, чтобы связаться с вами</h2>
        <form action="" method="post">
          <input type="text" name="FIO" id="FIO" placeholder="ФИО"><br>
          <input type="number" name="telephone" id="telephone" placeholder="Номер телефона"><br>
          <button type="submit">Отправить</button>
        <form>
    </main>
    <footer>

    </footer>