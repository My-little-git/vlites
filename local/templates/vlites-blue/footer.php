<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>


</div>

<div class="callback">
  <div class="container">
    <div class="callback__inner">
      <div class="callback-title">Остались вопросы? Заполните форму!</div>
      <div class="callback-subtitle">Мы перезвоним и проконсультируем.</div>
      <form class="callback-form" action="" method="POST">
        <div class="callback-data">
          <input type="text" placeholder="Ваше имя" name="name" class="callback__input">
          <input type="text" placeholder="Ваш номер" name="phone" class="callback__input">
          <button class="btn btn-red btn-call" style="width: 300px">
            <img class="btn-call-icon" src="<?=DEFAULT_TEMPLATE_PATH?>/img/icons/phone.svg" alt="">
            Заказать звонок
          </button>
        </div>
        <div class="conditions">
          <input class="callback__checkbox" id="happy" type="checkbox" name="conditions">
          <label for="happy"></label>
          Я принимаю условия соглашения
        </div>
      </form>
    </div>
  </div>
</div>
<footer id="footer" class="footer">
  <div class="footer__main">
    <div class="container">
      <div class="footer__main-inner">
        <ul class="footer__navbar">
          <li><a href="" class="footer__link">Гарантия</a></li>
          <li><a href="" class="footer__link">Сервис</a></li>
          <li><a href="" class="footer__link">Замена и возврат</a></li>
          <li><a href="" class="footer__link">Партнерам</a></li>
        </ul>
        <img src="<?=DEFAULT_TEMPLATE_PATH?>/img/logo/footer-logo.png" alt="" class="footer__logo-img">
        <div class="footer__contacts">
          <div class="footer__email">info@vlites.ru</div>
          <div class="footer__phone">8 (904) 270 80 77</div>
          <div class="footer__messangers">
            <a href="">
              <img src="<?=DEFAULT_TEMPLATE_PATH?>/img/icons/telegram.svg" alt="" class="footer__messanger-icon">
            </a>
            <a href="">
              <img src="<?=DEFAULT_TEMPLATE_PATH?>/img/icons/whatsapp.svg" alt="" class="footer__messanger-icon">
            </a>
            <a href=""><img src="<?=DEFAULT_TEMPLATE_PATH?>/img/icons/vk.svg" alt="" class="footer__messanger-icon"></a>
          </div>
          <div class="footer__politic"><a href="">Условия использования</a>
            <br>и <a href="">конфиденциальности</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer__info">
    <div class="container">
      <div class="footer__info-inner">
        <div class="footer__copyright">© 2022 Все права защищены</div>
        <div class="footer__offer-politic">«Сайт и информация, размещенная на нём, носит исключительно информационный
          характер и
          не является публичной офертой,
          определяемой положениями статьи 437 ФЗ "Гражданский кодекс Российской Федерации" N 51-ФЗ от 30.11.1994 г.»
        </div>
      </div>
    </div>
  </div>
</footer>

</body>

</html>