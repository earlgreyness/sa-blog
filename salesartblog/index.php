<!doctype html>
<html lang="ru">
<head>
  <!-- Метаданные -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="format-detection" content="telephone=no">

  <!-- Заголовок -->
  <title>Главная | Блог SalesArt</title>

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
        <a class="h-logo"></a>


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

          <a class="h-tel__number" href="tel:88002000600">8 800 2000 600</a>
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

      <!-- ----------------------------------
        САЙДБАР
      ----------------------------------- -->
      <aside class="sidebar">

        <!-- Поиск -->
        <div class="s-search">
          <p class="s-search__title">Поиск по блогу</p>

          <form class="s-search__form" id="search-form" action="#" method="post">
            <input class="s-search__input" name="s" type="text" placeholder="Введите запрос" data-required="true">
          </form>
        </div>


        <!-- Меню -->
        <nav class="s-menu">
          <p class="s-menu__title">Статьи по разделам</p>

          <ul class="s-menu__wrapper">
            <li class="s-menu__item">
              <a class="s-menu__link" href="#">Контекстная реклама</a>
            </li>

            <li class="s-menu__item">
              <a class="s-menu__link" href="#">Landing Page</a>
            </li>

            <li class="s-menu__item">
              <a class="s-menu__link s-menu__link--active">Аналитика</a>

              <ul class="s-submenu">
                <li class="s-submenu__item">
                  <a class="s-submenu__link" href="#">Google Analytics</a>
                </li>

                <li class="s-submenu__item">
                  <a class="s-submenu__link" href="#">Яндекс Метрика</a>
                </li>
              </ul>
            </li>

            <li class="s-menu__item">
              <a class="s-menu__link" href="#">Social Media Marketing (SMM)</a>
            </li>

            <li class="s-menu__item">
              <a class="s-menu__link" href="#">SEO-блог</a>
            </li>

            <li class="s-menu__item">
              <a class="s-menu__link" href="#">E-mail маркетинг</a>
            </li>

            <li class="s-menu__item">
              <a class="s-menu__link" href="#">Копирайтинг</a>
            </li>

            <li class="s-menu__item">
              <a class="s-menu__link" href="#">Дизайн</a>
            </li>

            <li class="s-menu__item">
              <a class="s-menu__link" href="#">Юзабилити</a>
            </li>

            <li class="s-menu__item">
              <a class="s-menu__link" href="#">Монстры маркетинга</a>
            </li>

            <li class="s-menu__item">
              <a class="s-menu__link" href="#">Видеоуроки</a>
            </li>
          </ul>
        </nav>


        <!-- Подписка на обновления -->
        <div class="s-subscribe">
          <p class="s-subscribe__title">Получайте новые статьи</p>

          <p class="s-subscribe__desc">Статьи будут приходить не чаще, чем раз в неделю.</p>

          <form class="s-subscribe__form" id="subscribe-form" action="#" method="post">
            <input class="s-subscribe__input" name="email" type="email" placeholder="Ваш E-mail" data-required="true">

            <button class="s-subscribe__submit" type="submit">Подписаться</button>
          </form>

          <span class="s-subscribe__subscribers">2 548 Подписчиков</span>
        </div>


        <!-- Баннер -->
        <a class="s-banner" href="#" target="_blank">
          <img src="http://placehold.it/240x400">
        </a>


        <!-- Социальные кнопки -->
        <div class="s-social">
          <a class="s-social__link" href="#" target="_blank">
            <svg class="s-social__icon s-social__icon--facebook">
              <use xlink:href="#icon-facebook"></use>
            </svg>
          </a>

          <a class="s-social__link" href="#" target="_blank">
            <svg class="s-social__icon s-social__icon--twitter">
              <use xlink:href="#icon-twitter"></use>
            </svg>
          </a>

          <a class="s-social__link" href="#" target="_blank">
            <svg class="s-social__icon s-social__icon--pinterest">
              <use xlink:href="#icon-pinterest"></use>
            </svg>
          </a>

          <a class="s-social__link" href="#" target="_blank">
            <svg class="s-social__icon s-social__icon--instagram">
              <use xlink:href="#icon-instagram"></use>
            </svg>
          </a>
        </div>

      </aside>


      <!-- ----------------------------------
        ОСНОВНОЙ КОНТЕНТ
      ----------------------------------- -->
      <main class="main">

        <!-- Хлебные крошки -->
        <ul class="breadcrumbs">
          <li class="breadcrumbs__item">
            <a class="breadcrumbs__link" href="#">Блог</a>
          </li>

          <li class="breadcrumbs__item">
            <a class="breadcrumbs__link" href="#">Аналитика</a>
          </li>

          <li class="breadcrumbs__item">
            <a class="breadcrumbs__link" href="#">Яндекс.Метрика</a>
          </li>

          <li class="breadcrumbs__item breadcrumbs__item--active">
            <a class="breadcrumbs__link" href="#">Настройка сквозной аналитики (проверка на переполнение блока проверка на
            переполнение блока)</a>
          </li>
        </ul>

        <!-- Анонсы статей -->
        <?php
        if ( have_posts() ) :

          while ( have_posts() ) : the_post();

            get_template_part( 'content', get_post_format() );

          endwhile;

        endif;
        ?>

        <!-- Пагинация -->
        <div class="pagination">
          <a class="pagination__prev" href="#">Предыдущая</a>

          <a class="pagination__link pagination__link--active" href="#">1</a>
          <a class="pagination__link" href="#">2</a>
          <a class="pagination__link" href="#">3</a>
          <a class="pagination__link" href="#">4</a>
          <a class="pagination__link" href="#">5</a>

          <a class="pagination__ellipsis">&hellip;</a>

          <a class="pagination__link" href="#">89</a>

          <a class="pagination__next" href="#">Следующая</a>
        </div>

      </main>

    </div>

  </div>


  <!-- ----------------------------------
    ПОДВАЛ
  ----------------------------------- -->
  <footer class="footer">
    <div class="footer__wrapper">
      <div class="footer__container">

        <!-- Первая колонка меню -->
        <div class="f-menu">
          <p class="f-menu__title">Услуги</p>

          <ul class="f-menu__wrapper">
            <li class="f-menu__item">
              <a class="f-menu__link" href="#">Ссылка 1</a>
            </li>

            <li class="f-menu__item">
              <a class="f-menu__link" href="#">Ссылка 2</a>
            </li>

            <li class="f-menu__item">
              <a class="f-menu__link" href="#">Ссылка 3</a>
            </li>

            <li class="f-menu__item">
              <a class="f-menu__link" href="#">Ссылка 4</a>
            </li>
          </ul>
        </div>


        <!-- Вторая колонка меню -->
        <div class="f-menu">
          <p class="f-menu__title">Обучение</p>

          <ul class="f-menu__wrapper">
            <li class="f-menu__item">
              <a class="f-menu__link" href="#">Ссылка 1</a>
            </li>

            <li class="f-menu__item">
              <a class="f-menu__link" href="#">Ссылка 1</a>
            </li>
          </ul>
        </div>


        <!-- Третья колонка меню -->
        <div class="f-menu">
          <p class="f-menu__title">Разное</p>

          <ul class="f-menu__wrapper">
            <li class="f-menu__item">
              <a class="f-menu__link" href="#">Ссылка 1</a>
            </li>

            <li class="f-menu__item">
              <a class="f-menu__link" href="#">Ссылка 2</a>
            </li>

            <li class="f-menu__item">
              <a class="f-menu__link" href="#">Ссылка 3</a>
            </li>

            <li class="f-menu__item">
              <a class="f-menu__link" href="#">Ссылка 4</a>
            </li>

            <li class="f-menu__item">
              <a class="f-menu__link" href="#">Ссылка 1</a>
            </li>

            <li class="f-menu__item">
              <a class="f-menu__link" href="#">Ссылка 2</a>
            </li>

            <li class="f-menu__item">
              <a class="f-menu__link" href="#">Ссылка 3</a>
            </li>
          </ul>
        </div>


        <!-- Копирайт -->
        <div class="f-copyright">
          <div class="f-copyright__logo"></div>

          <span class="f-copyright__text">&copy; ООО "СейлсАрт", 2014-2017</span>

          <span class="f-copyright__rights">Все права защищены</span>

          <div class="f-copyright__meta">
            <span class="f-copyright__inn">ИНН 7736125805 | ОГРН 1157746131047</span>

            <a class="f-copyright__policy" href="#">Политика конфиденциальности</a>
          </div>
        </div>

      </div>
    </div>
  </footer>


  <!-- ----------------------------------
    Модальное окно "ПОДПИШИТЕСЬ"
  ----------------------------------- -->
  <div class="modal mfp-hide" id="modal-subscribe">
    <p class="modal__title">Подпишитесь на<br>обновления в нашем блоге</p>

    <form class="modal__form" id="modal-subscribe-form" action="#" method="post">
      <input class="modal__input" name="email" type="email" placeholder="Ваш E-mail" data-required="true">

      <button class="modal__submit" type="submit">Подписаться</button>
    </form>

    <button class="modal-close">
      <svg class="modal-close__icon">
        <use xlink:href="#icon-close"></use>
      </svg>
    </button>
  </div>

  <?php wp_footer(); ?>
</body>
</html>
