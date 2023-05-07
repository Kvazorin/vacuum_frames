<?php ?>
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
            <a href="about.php" class="nav__list-link link">О компании</a>
          </li>
          <li class="nav__list-item">
            <a href="partnership.php" class="nav__list-link link">Партнерам</a>
          </li>
          <li class="nav__list-item">
            <a href="desinger.php" class="nav__list-link link">Конструктор</a>
          </li>
          <li class="nav__list-item">
            <a href="feedback.php" class="nav__list-link link">Обратная связь</a>
          </li>
        </ul>
        <button class="sidebar-menu__btn" onclick="openSideMenu()"><i class="fa-solid fa-bars"></i></button>
      </nav>
    </div>
  </div>
</header>
<div id="sidebar">
  <div class="sidebar__btn-container">
    <button class="sidebar-menu__btn" onclick="closeSideMenu()"><i class="fa-solid fa-xmark"></i></button>
  </div>
  <ul class="nav__list_sidebar list">
    <li class="nav__list-item">
      <a href="index.php" class="nav__list-link link">Главная</a>
    </li>
    <li class="nav__list-item">
      <a href="about.php" class="nav__list-link link">О компании</a>
    </li>
    <li class="nav__list-item">
      <a href="partnership.php" class="nav__list-link link">Партнерам</a>
    </li>
    <li class="nav__list-item">
      <a href="desinger.php" class="nav__list-link link">Конструктор</a>
    </li>
    <li class="nav__list-item">
      <a href="feedback.php" class="nav__list-link link">Обратная связь</a>
    </li>
  </ul>
</div>