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