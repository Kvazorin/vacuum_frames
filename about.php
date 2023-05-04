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
    <title>О компании</title>
</head>

<body class="main__section_about_bg-image">
    <?php require "components/header.php"; ?>

    <main class="main">
        <div class="main__inner">
            <div class="container main__container">
                <section class="main__section_about section">
                    <h3 class="section_about__article">
                        О компании
                    </h3>
                    <div class="section_about__item_1">
                        <div class="section_about__subitem_1">
                            <ul class="following__item-list">
                                <li class="list__item">Наша компания, уже более 10 лет занимается производством вакуумных рамок под заказ для различных российских брендов.</li>
                                <li class="list__item">С 2022 года мы решили создать собственный бренд RUNDT и поставлять вакуумные рамки напрямую конечным потребителям.</li>
                                <li class="list__item">У нас самый большой Ассортимент вакуумных рамок в мире и насчитывает более 70 моделей различных форм и типоразмеров.</li>
                                <li class="list__item">Мы можем изготовить вакуумную рамку любых размеров и форм под любые потребности клиента.</li>
                                <li class="list__item">Наши рамки широко используются в России и за её пределами: АЭС «Аккую» (Турция), АЭС «Эль Дабаа» (Египет), АЭС «Руппур» (Бангладеш)
                                    наша продукция запатентована в 2016 году.
                                </li>
                            </ul>
                            </p>

                        </div>
                    </div>
                </section>

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
                        <div class="row">
                            <div class="column">
                                <img src="assets/img/patent.jpg" onclick="openModal();currentSlide(5)" class="hover-shadow">
                            </div>
                        </div>

                        <!-- The Modal/Lightbox -->
                        <div id="myModal" class="modal">
                            <span class="close cursor" onclick="closeModal()">&times;</span>
                            <div class="modal-content">

                                <div class="mySlides">
                                    <div class="numbertext">1 / 5</div>
                                    <img src="assets/img/cert.png" style="width:100%">
                                </div>
                                <div class="mySlides">
                                    <div class="numbertext">2 / 5</div>
                                    <img src="assets/img/cert2.jpg" style="width:100%">
                                </div>
                                <div class="mySlides">
                                    <div class="numbertext">3 / 5</div>
                                    <img src="assets/img//cert3.jpg" style="width:100%">
                                </div>
                                <div class="mySlides">
                                    <div class="numbertext">4 / 5</div>
                                    <img src="assets/img/cert.png" style="width:100%">
                                </div>
                                <div class="mySlides">
                                    <div class="numbertext">5 / 5</div>
                                    <img src="assets/img/patent.jpg" style="width:100%">
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
                                    <div class="column">
                                        <img class="demo" src="assets/img/patent.jpg" onclick="currentSlide(5)" alt="Патент">
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </section>

                <section class="main__section_achievements section">
                    <h2 class="section_achievements__article">Наша цель</h2>
                    <p class="section_achievements__following">
                        Nam felis justo, ullamcorper vel velit sed, iaculis bibendum
                        dolor. Nullam nisi dolor, scelerisque sit amet nisi eget, commodo
                        congue
                    </p>
                </section>

                <section class="main__section_about_slider section">
                    <h3 class="section_about__article">
                        Ключевые заказчики
                    </h3>
                    <div class="section_about__slider">
                        <div class="section_about__slider-item">
                            <img src="assets/img/18.png" alt="slider-item" />
                        </div>
                        <div class="section_about__slider-item">
                            <img src="assets/img/1.png" alt="slider-item" />
                        </div>
                        <div class="section_about__slider-item">
                            <img src="assets/img/2.png" alt="slider-item" />
                        </div>
                        <div class="section_about__slider-item">
                            <img src="assets/img/3.png" alt="slider-item" />
                        </div>
                        <div class="section_about__slider-item">
                            <img src="assets/img/4.png" alt="slider-item" />
                        </div>
                        <div class="section_about__slider-item">
                            <img src="assets/img/5.png" alt="slider-item" />
                        </div>
                        <div class="section_about__slider-item">
                            <img src="assets/img/6.png" alt="slider-item" />
                        </div>
                        <div class="section_about__slider-item">
                            <img src="assets/img/7.png" alt="slider-item" />
                        </div>
                        <div class="section_about__slider-item">
                            <img src="assets/img/8.png" alt="slider-item" />
                        </div>
                        <div class="section_about__slider-item">
                            <img src="assets/img/9.png" alt="slider-item" />
                        </div>
                        <div class="section_about__slider-item">
                            <img src="assets/img/10.png" alt="slider-item" />
                        </div>
                        <div class="section_about__slider-item">
                            <img src="assets/img/11.png" alt="slider-item" />
                        </div>
                        <div class="section_about__slider-item">
                            <img src="assets/img/12.png" alt="slider-item" />
                        </div>
                        <div class="section_about__slider-item">
                            <img src="assets/img/13.png" alt="slider-item" />
                        </div>
                        <div class="section_about__slider-item">
                            <img src="assets/img/14.png" alt="slider-item" />
                        </div>
                        <div class="section_about__slider-item">
                            <img src="assets/img/15.png" alt="slider-item" />
                        </div>
                        <div class="section_about__slider-item">
                            <img src="assets/img/16.png" alt="slider-item" />
                        </div>
                        <div class="section_about__slider-item">
                            <img src="assets/img/17.png" alt="slider-item" />
                        </div>

                    </div>
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