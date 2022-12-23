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
        header("Location: http://localhost:8000/index.php");
        endif;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <title>Главная</title>
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

    <main class="main">
      <div class="main__inner_jumbotron">
        <div class="container main__container">
          <section class="main__section_jumbotron">
            <div class="section_jumbotron__flex-item">
              <img
                src="assets/img/jmbtrn.png"
                alt="jmbtrn_img"
                class="main__section_jumbotron__img"
              />
              <div class="section_jumbotron__article article">
                <h1 class="jumbotron__article_main">
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
            <form action="" method="POST" class="form section_jumbotron__form">
              <h4 class="form__article">
                Оставьте заявку
                <p class="form__article_following">
                  И мы поможем решить <br />
                  Вашу проблему
                </p>
              </h4>
              <input
                type="text"
                name="FIO"
                id="FIO"
                placeholder="ФИО"
                class="input form__input"
              />
              <input
                type="number"
                name="telephone"
                id="telephone"
                placeholder="Номер телефона"
                class="input form__input"
              />
              <textarea
                type="textfield"
                name="opisanie"
                id="opisanie"
                placeholder="Опишите проблему"
                class="input form__input form__textarea"
              ></textarea>
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
            <h2 class="section_achievements__article">
              Наши достижения
            </h2>
            <p class="section_achievements__following">
              Nam felis justo, ullamcorper vel velit sed, iaculis bibendum dolor.
              Nullam nisi dolor, scelerisque sit amet nisi eget, commodo congue
            </p>
            <div class="section_achievements__images">
              <img src="assets/img/cert.png" alt="certificate_img"/>
              <img src="assets/img/cert.png" alt="certificate_img"/>
              <img src="assets/img/cert.png" alt="certificate_img"/>
              <img src="assets/img/cert.png" alt="certificate_img"/>
            </div>
          </section>
          <section class="main__section_recent-jobs section">
            <h2 class="section_recent-jobs__article">
              Последние работы
            </h2>



            </div>
          </section>
        </div>
      </div>
    </main>


    <footer></footer>
  </body>
</html>
