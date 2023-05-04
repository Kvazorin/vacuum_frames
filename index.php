<?php
session_start();
if (isset($_POST["FIO"]) && isset($_POST["telephone"]) && isset($_POST["opisanie"])) :
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
  <link rel="stylesheet" href="node_modules/slick-carousel/slick/slick.css" />
  <link rel="stylesheet" href="node_modules/slick-carousel/slick/slick-theme.css" />
  <link rel="stylesheet" href="assets/css/styles.css" />
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon.png">
  <title>Главная</title>
</head>

<body class="background_img">
  <?php require "components/header.php"; ?>

  <main class="main">
    <div class="main__inner_jumbotron">
      <div class="container main__container">
        <section class="main__section_jumbotron">
          <div class="section_jumbotron__flex-item">
            <img src="assets/img/jmbtrn.png" alt="jmbtrn_img" class="main__section_jumbotron__img" />
            <div class="section_jumbotron__article">
              <h1 class="jumbotron__article_main article">
                Вакуумные рамки - выбор профессионалов
                <p class="jumbotron__article_following">
                  Запатентованные. С защитой от подделок.
                </p>
              </h1>
              <p class="jumbotron__article_main_s">
                Потому что наши рамки - лучшие на рынке. Тысячи довольных
                клиентов и решенных задач.
              </p>
            </div>
          </div>
          <form action="#" method="#" class="form section_jumbotron__form">
            <h4 class="form__article">
              Оставьте заявку
              <p class="form__article_following">
                И мы поможем решить <br />
                Вашу проблему
              </p>
            </h4>
            <input type="text" name="FIO" id="FIO" placeholder="ФИО" class="input form__input" />
            <input type="number" name="telephone" id="telephone" placeholder="Номер телефона" class="input form__input" />
            <textarea type="textfield" name="opisanie" id="opisanie" placeholder="Опишите проблему" class="input form__input form__textarea"></textarea>
            <button type="submit" class="form__button">Отправить</button>
          </form>
        </section>
      </div>
    </div>

    <div class="main__inner_gray">
      <div class="container main__container">
        <section class="main__section_qualities">
          <div class="section_qualities__item_1">
            <div class="section_qualities__subitem_1">
              <h3 class="section_qualities__article article">
                Lorem ipsum dolor sit amet,
                <p>consectetur adipiscing elit.</p>
              </h3>
              <p class="section_qualities__following">
                Nam felis justo, ullamcorper vel velit sed, iaculis bibendum
                dolor. Nullam nisi dolor, scelerisque sit amet nisi eget,
                commodo congue tellus. Mauris varius, lectus sollicitudin
                scelerisque varius, neque ipsum dictum ante, sed vestibulum
                leo tortor at enim.
              </p>
            </div>
            <div class="section_qualities__subitem_2">
              <img src="/assets/img/qual_img_1.png" alt="" />
            </div>
          </div>
          <div class="section_qualities__item_2">
            <div class="section_qualities__subitem_2">
              <img src="/assets/img/qual_img_2.png" alt="" />
            </div>
            <div class="section_qualities__subitem_1">
              <h3 class="section_qualities__article article">
                Lorem ipsum dolor sit amet,
                <p>consectetur adipiscing elit.</p>
              </h3>
              <p class="section_qualities__following">
                Nam felis justo, ullamcorper vel velit sed, iaculis bibendum
                dolor. Nullam nisi dolor, scelerisque sit amet nisi eget,
                commodo congue tellus. Mauris varius, lectus sollicitudin
                scelerisque varius, neque ipsum dictum ante, sed vestibulum
                leo tortor at enim.
              </p>
            </div>
          </div>
        </section>
      </div>
    </div>

    <div class="main__inner">
      <div class="container main__container">

        <section class="main__section_achievements section">
          <h2 class="section_achievements__article">Наши достижения</h2>
          <p class="section_achievements__following">
            Nam felis justo, ullamcorper vel velit sed, iaculis bibendum
            dolor. Nullam nisi dolor, scelerisque sit amet nisi eget, commodo
            congue
          </p>
          <div class="section_achievements__images">
            <!-- Images used to open the lightbox -->
            <div class="row">
              <div class="column">
                <img src="assets/img/cert.png" onclick="openModal();currentSlide(1)" class="hover-shadow">
              </div>
            </div>
            <div class="row">
              <div class="column">
                <img src="assets/img/cert2.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow">
              </div>
            </div>
            <div class="row">
              <div class="column">
                <img src="assets/img/cert3.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow">
              </div>
            </div>
            <div class="row">
              <div class="column">
                <img src="assets/img/cert.png" onclick="openModal();currentSlide(4)" class="hover-shadow">
              </div>
            </div>

            <!-- The Modal/Lightbox -->
            <div id="myModal" class="modal">
              <span class="close cursor" onclick="closeModal()">&times;</span>
              <div class="modal-content">

                <div class="mySlides">
                  <div class="numbertext">1 / 4</div>
                  <img src="assets/img/cert.png" style="width:100%">
                </div>
                <div class="mySlides">
                  <div class="numbertext">2 / 4</div>
                  <img src="assets/img/cert2.jpg" style="width:100%">
                </div>
                <div class="mySlides">
                  <div class="numbertext">3 / 4</div>
                  <img src="assets/img//cert3.jpg" style="width:100%">
                </div>
                <div class="mySlides">
                  <div class="numbertext">4 / 4</div>
                  <img src="assets/img/cert.png" style="width:100%">
                </div>

                <!-- Next/previous controls -->
                <a class="prev" onclick="plusSlides(-1)"><i class="fa-solid fa-chevron-left"></i></a>
                <a class="next" onclick="plusSlides(1)"><i class="fa-solid fa-chevron-right"></i></a>

                <!-- Caption text -->
                <div class="caption-container">
                  <p id="caption"></p>
                </div>

                <!-- Thumbnail image controls -->
                <div class="preview-thumbnail">
                  <div class="column">
                    <img class="demo" src="assets/img/cert.png" onclick="currentSlide(1)" alt="Сертификат соответствия1">
                  </div>
                  <div class="column">
                    <img class="demo" src="assets/img/cert2.jpg" onclick="currentSlide(2)" alt="Сертификат соответствия2">
                  </div>
                  <div class="column">
                    <img class="demo" src="assets/img/cert3.jpg" onclick="currentSlide(3)" alt="Сертификат соответствия3">
                  </div>
                  <div class="column">
                    <img class="demo" src="assets/img/cert.png" onclick="currentSlide(4)" alt="Сертификат соответствия4">
                  </div>
                </div>


              </div>
            </div>
          </div>
        </section>

        <section class="main__section_recent-jobs section">
          <h2 class="section_recent-jobs__article">Последние работы</h2>
          <div class="section_recent-jobs__slider">
            <div class="section_recent-jobs__slider-item">
              <img src="assets/img/3.jpg" alt="slider-item" />
            </div>
            <div class="section_recent-jobs__slider-item">
              <img src="assets/img/2.jpg" alt="slider-item" />
            </div>
            <div class="section_recent-jobs__slider-item">
              <img src="assets/img/3.jpg" alt="slider-item" />
            </div>
            <div class="section_recent-jobs__slider-item">
              <img src="assets/img/2.jpg" alt="slider-item" />
            </div>
          </div>
        </section>
      </div>
    </div>

    <div class="main__inner_gray">
      <div class="container main__container">
        <section class="main__section_feedback section">
          <h2 class="section_feedback__article">Обратная связь</h2>
          <p class="section_feedback__following">
            Уже знаете чего хотите? <br />
            Тогда конструктор ждёт Вас!
          </p>
          <a href="desinger.php" class="section_feedback__btn">
            Перейти в конструктор
          </a>
        </section>
      </div>
    </div>
  </main>

  <?php require "components/footer.php"; ?>

  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/slick-carousel/slick/slick.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>

</html>