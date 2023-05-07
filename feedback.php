<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon.png">
    <title>Пользовательское соглашение</title>
</head>

<body>
    <?php require "components/header.php"; ?>

    <main class="main">
        <div class="main__inner">
            <div class="container main__container">
                <section class="main__section_feedback section">
                    <h2 class="section_feedback__article article">Обратная связь</h2>
                    <p class="section_feedback__following">
                        Nam felis justo, ullamcorper vel velit sed, iaculis bibendum
                        dolor. Nullam nisi dolor, scelerisque sit amet nisi eget, commodo
                        congue
                    </p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1492.5939826738265!2d38.132506937449975!3d55.90838694836951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x414ad38fd6764f0d%3A0x374efab908a732bc!2sUlitsa%20Tsentral&#39;naya%2C%201%2C%20Sverdlovsky%2C%20Moskovskaya%20oblast&#39;%2C%20141140!5e0!3m2!1sen!2sru!4v1683222495264!5m2!1sen!2sru" width="1200" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </section>
            </div>
            
            <div class="main__inner_gray">
                <section class="main__section_feedback-exp section ">
                    <form action="" method="post" class="form section_feedback-exp__form">
                        <h4 class="form__article">
                            Заполните форму
                            <p class="form__article_following">
                                Для обратной связи по электронной <br> почте
                            </p>
                        </h4>
                        <input type="text" name="FIO" id="FIO" placeholder="ФИО" class="input form__input">
                        <input type="number" name="telephone" id="telephone" placeholder="Номер телефона" class="input form__input">
                        <button type="submit" class="button form__button">Отправить</button>
                    </form>
                </section>
            </div>
        </div>

    </main>
    <?php require "components/footer.php"; ?>
    <script src="assets/js/script.js"></script>
</body>

</html>