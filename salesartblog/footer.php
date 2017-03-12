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
