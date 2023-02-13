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
  <link rel="stylesheet" href="assets/css/styles.css" />
  <title>Конструктор</title>
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <div class="container header__container">
        <div class="header__logo logo">
          <a href="index.php" class="logo__link">
            <img src="assets/img/logo.png" alt="logo__img" class="logo__img" />
          </a>
        </div>
        <nav class="header__nav nav">
          <ul class="nav__list list">
            <li class="nav__list-item">
              <a href="index.php" class="nav__list-link link">Главная</a>
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


          <!-- <button class="section__collapsible-btn">Выбор упаковки +</button>
          <div class="section__collapsible-content">
            <form class="section__collapsible-content__form" action="" method="post">
              <input class="form__input" type="radio" name="course_2" value="Обычная" />обычная<br>
              <input class="form__input" type="radio" name="course_2" value="Новогодняя" />новогодняя<br>
            </form>
          </div> -->

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

  <footer class="footer">
    <div class="footer__inner">
      <div class="container footer__container">
        <ul class="footer__link-list">
          <li class="footer__list-item">
            <a href="index.php" class="footer__link">Главная</a>
            <a href="#" class="footer__link">О компании</a>
          </li>
          <li class="footer__list-item">
            <a href="#" class="footer__link">Партнерам</a>
            <a href="#" class="footer__link">Обратная связь</a>
          </li>
          <li class="footer__list-item">
            <a href="#" class="footer__link">Конструктор</a>
            <a href="#" class="footer__link">Пользовательское соглашение</a>
          </li>
          <li class="footer__list-item_socials">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M29.16 23.9713C28.6587 23.7175 26.2175 22.5263 25.7612 22.3563C25.305 22.1938 24.9737 22.1087 24.6412 22.61C24.3162 23.0987 23.3587 24.2175 23.0662 24.5438C22.7737 24.87 22.4862 24.895 21.9925 24.6737C21.4912 24.42 19.89 23.8987 17.9888 22.1937C16.5037 20.8725 15.515 19.245 15.2213 18.7437C14.9288 18.2488 15.1888 17.9688 15.4362 17.7213C15.6637 17.4937 15.9375 17.1488 16.1912 16.8488C16.4325 16.5487 16.51 16.3475 16.6863 16.0225C16.8487 15.6712 16.765 15.3975 16.6413 15.15C16.5175 14.9025 15.5212 12.4488 15.105 11.4713C14.7075 10.5013 14.2912 10.625 13.985 10.625C13.6987 10.5988 13.3663 10.5988 13.035 10.5988C12.7038 10.5988 12.1625 10.7225 11.7062 11.1975C11.25 11.6988 9.96125 12.8962 9.96125 15.3188C9.96125 17.7475 11.745 20.0975 11.9925 20.4487C12.2463 20.7737 15.5013 25.7737 20.495 27.9225C21.6863 28.4237 22.6112 28.7237 23.3337 28.9713C24.525 29.3487 25.6125 29.2962 26.4713 29.1725C27.4212 29.0162 29.4137 27.9675 29.8312 26.7962C30.255 25.6175 30.255 24.6412 30.1312 24.42C30.0075 24.1925 29.6825 24.0687 29.1812 23.8475L29.16 23.9713ZM20.1038 36.25H20.0775C17.1213 36.25 14.1988 35.4487 11.6463 33.9512L11.0475 33.5938L4.7975 35.2212L6.4775 29.14L6.07375 28.515C4.42625 25.8913 3.5475 22.8638 3.5475 19.7525C3.5475 10.6775 10.9763 3.275 20.1163 3.275C24.5438 3.275 28.6975 5 31.8225 8.125C34.9475 11.2238 36.6725 15.3775 36.6725 19.7787C36.66 28.8475 29.2375 36.25 20.11 36.25H20.1038ZM34.1987 5.74875C30.3962 2.07625 25.3962 0 20.0775 0C9.1075 0 0.175 8.89375 0.16875 19.8237C0.16875 23.3138 1.08 26.7188 2.825 29.7325L0 40L10.56 37.2463C13.47 38.815 16.745 39.655 20.0788 39.6613H20.085C31.0613 39.6613 39.9938 30.7675 40 19.83C40 14.5375 37.9363 9.55625 34.1738 5.8125L34.1987 5.74875Z" fill="white" />
            </svg>
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M20 0C8.95097 0 0 8.95226 0 20C0 31.0477 8.95226 40 20 40C31.049 40 40 31.0477 40 20C40 8.95226 31.0477 0 20 0ZM29.8232 13.7019L26.5406 29.1703C26.2981 30.2671 25.6452 30.5329 24.7342 30.0168L19.7342 26.3316L17.3226 28.6542C17.0568 28.92 16.831 29.1458 16.3148 29.1458L16.6697 24.0568L25.9355 15.6852C26.3394 15.3303 25.8465 15.129 25.3135 15.4839L13.8619 22.6929L8.92645 21.1523C7.85419 20.8142 7.82968 20.08 9.15226 19.5639L28.4348 12.1277C29.3303 11.8052 30.1123 12.3458 29.8219 13.7006L29.8232 13.7019Z" fill="white" />
            </svg>
            <svg width="42" height="40" viewBox="0 0 42 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M20.1264 8.30149C23.3094 8.30149 26.3087 9.71256 28.5068 11.9184V11.9249C28.5068 10.8656 29.2195 10.0643 30.2045 10.0643H30.4546C32.009 10.0643 32.3204 11.5301 32.3204 11.9927L32.327 28.4551C32.2188 29.534 33.4409 30.0916 34.1198 29.3984C36.7582 26.6845 39.9204 15.4324 32.4768 8.91778C25.5348 2.83703 16.2176 3.84158 11.2639 7.25524C5.99876 10.893 2.6333 18.9281 5.90234 26.4799C9.47235 34.7131 19.6782 37.1691 25.7524 34.7196C28.8273 33.4779 30.2449 37.629 27.0488 38.988C22.2319 41.0427 8.80786 40.8329 2.53819 29.9756C-1.69762 22.6415 -1.47352 9.73992 9.76551 3.05592C18.3557 -2.06067 29.6898 -0.643084 36.5224 6.49043C43.6624 13.9549 43.2494 27.9209 36.2787 33.3502C33.1217 35.8193 28.4338 33.418 28.4677 29.8206L28.4325 28.648C26.2345 30.8251 23.3094 32.102 20.1264 32.102C13.8293 32.102 8.28539 26.5568 8.28539 20.2663C8.28539 13.908 13.8293 8.3041 20.1264 8.3041V8.30149ZM28.0468 19.8115C27.8084 15.2031 24.3882 12.4279 20.2554 12.4279H20.099C15.3355 12.4279 12.6893 16.1803 12.6893 20.4343C12.6893 25.2043 15.8853 28.2167 20.0795 28.2167C24.7609 28.2167 27.8345 24.7913 28.0586 20.7392L28.0468 19.8115Z" fill="white" />
            </svg>
          </li>
        </ul>
        <p class="footer__end-text">Все права защищены© 2022</p>
      </div>
    </div>
  </footer>
  <script src="assets/js/script.js"></script>
</body>

</html>