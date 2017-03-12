<!doctype html>
<html lang="ru">
<head>
  <!-- Метаданные -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="format-detection" content="telephone=no">

  <!-- Заголовок -->
  <title>
  <?php
  if ( is_home() ) {
    echo 'Главная | '; echo bloginfo( 'name' );
  } else {
    echo wp_title( ' | ', false, right ); echo bloginfo( 'name' );
  }
  ?>
  </title>

  <!-- Шрифты -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,700,900&subset=cyrillic">

  <!-- Модальные окна -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

  <!-- SVG спрайты -->
  <script>
    var ajax = new XMLHttpRequest();

    ajax.open('GET', "<?php echo get_template_directory_uri() ?>/img/sprites.svg", true);

    ajax.send();

    ajax.onload = function( e ) {

      var div = document.createElement('div');

      div.innerHTML = ajax.responseText;

      document.body.insertBefore(div, document.body.childNodes[0]);

    }
  </script>

  <?php wp_head(); ?>

</head>

<body>
  <!-- Обертка для "Sticky footer" -->
  <div class="page-wrapper">

    <!-- ----------------------------------
      ШАПКА
    ----------------------------------- -->
    <header class="header">
      <div class="header__wrapper">

        <!-- Лого -->
        <a class="h-logo" href="http://salesart.ru"></a>


        <!-- Меню -->
        <ul class="h-menu" id="m-menu">
          <li class="h-menu__item">
            <a class="h-menu__link" href="#">Контекстная реклама</a>
          </li>

          <li class="h-menu__item">
            <a class="h-menu__link" href="#">Проектирование и разработка сайтов</a>
          </li>

          <li class="h-menu__item">
            <a class="h-menu__link h-menu__link--active">Блог</a>
          </li>

          <li class="m-menu-close" id="m-menu-close">
            <svg class="m-menu-close__icon">
              <use xlink:href="#icon-close"></use>
            </svg>
          </li>
        </ul>


        <!-- Телефон -->
        <address class="h-tel">
          <span class="h-tel__desc">Звонок по России бесплатный</span>

          <a class="h-tel__number" href="tel:84953084829">8 495 308 4829</a>

        </address>


        <!-- /Mobile/ Поиск -->
        <form class="m-search" id="m-search-form" action="#" method="post">
          <input class="m-search__input" name="s" type="text" placeholder="Введите запрос" data-required="true">
        </form>

        <button class="m-search-btn" id="m-search-btn">
          <svg class="m-search-btn__icon">
            <use xlink:href="#icon-zoom"></use>
          </svg>
        </button>


        <!-- /Mobile/ Подписаться -->
        <button class="m-subscribe" id="m-subscribe">Подписаться</button>


        <!-- /Mobile/ Услуги -->
        <button class="m-services" id="m-services">Услуги</button>

      </div>
    </header>


    <!-- Обертка для Сайдбара и Контента -->
    <div class="content">