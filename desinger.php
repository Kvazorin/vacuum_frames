<?php
if (isset($_POST["course"]) && isset($_POST["course_1"]) && isset($_POST["course"]) && isset($_POST["FIO"]) && isset($_POST["telephone"])) :
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
  header("Location: index.php");
endif;
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="assets/css/styles.css" />
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon.png">
  <title>Конструктор</title>
</head>

<body>
  <?php require "components/header.php"; ?>

  <main class="main">
    <div class="main__inner">
      <div class="container main__container">
        <section class="main__section_options section">
          <h2 class="section_options__article article">Конструктор</h2>
          <button class="section__collapsible-btn">Выбор расцветки +</button>
          <div class="section__collapsible-content">
            <form class="collapsible-content__form" action="" method="post">
              <div class="form__item">
                <input class="form__input" type="radio" id="Красный" name="course" value="Красный">
                <label for="Красный">
                  Красный
                </label>
              </div>
              <div class="form__item">
                <input class="form__input" type="radio" id="Зеленый" name="course" value="Зеленый">
                <label for="Зеленый">
                  Зеленый
                </label>
              </div>
              <div class="form__item">
                <input class="form__input" type="radio" id="Желтый" name="course" value="Желтый">
                <label for="Желтый">
                  Желтый
                </label>
              </div>
            </form>
          </div>

          <button class="section__collapsible-btn">Выбор доставки +</button>
          <div class="section__collapsible-content">
            <form class="collapsible-content__form" action="" method="post">
              <div class="form__item">
                <input class="form__input" type="radio" id="Машина" name="course_1" value="Машина">
                <label for="Машина">
                  Машина
                </label>
              </div>
              <div class="form__item">
                <input class="form__input" type="radio" id="Вертолет" name="course_1" value="Вертолет">
                <label for="Вертолет">
                  Вертолет
                </label>
              </div>
              <div class="form__item">
                <input class="form__input" type="radio" id="Курьер" name="course_1" value="Курьер">
                <label for="Курьер">
                  Курьер
                </label>
              </div>
            </form>
          </div>

          <button class="section__collapsible-btn">Выбор упаковки +</button>
          <div class="section__collapsible-content">
            <form class="collapsible-content__form" action="" method="post">
              <div class="form__item">
                <input class="form__input" type="radio" id="Обычная" name="course_2" value="Обычная">
                <label for="Обычная">
                  Обычная
                </label>
              </div>
              <div class="form__item">
                <input class="form__input" type="radio" id="Новогодняя" name="course_2" value="Новогодняя">
                <label for="Новогодняя">
                  Новогодняя
                </label>
              </div>
            </form>
          </div>
        </section>


      </div>
    </div>

    <div class="main__inner_gray">
      <section class="main__section_feedback-exp section ">
        <form action="" method="post" class="form section_feedback-exp__form">
          <h4 class="form__article">
            Заполните форму
            <p class="form__article_following">
              Указав Ваши контактные данные <br />
            </p>
          </h4>
          <input type="text" name="FIO" id="FIO" placeholder="ФИО" class="input form__input">
          <input type="number" name="telephone" id="telephone" placeholder="Номер телефона" class="input form__input">
          <button type="submit" class="button form__button">Отправить</button>
        </form>
      </section>
    </div>

  </main>

  <?php require "components/footer.php"; ?>
  <script src="assets/js/script_test.js"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>