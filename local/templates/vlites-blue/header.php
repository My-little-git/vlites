<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php

use Bitrix\Main\Page\Asset;
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <? $APPLICATION->ShowHead() ?>

  <title><? $APPLICATION->ShowTitle() ?></title>

  <?php
  Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/css/style.css');

  Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/scripts/jquery-3.6.0.min.js');
  Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/scripts/slick.min.js');
  Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/scripts/main.js');

  Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
  ?>
</head>

<body>

  <div id="panel"><?php $APPLICATION->ShowPanel(); ?></div>

  <header id="header" class="header">
    <div class="header__inner">
      <div class="header__main">
        <div class="container">
          <div class="header__main-inner">
            <a href="/">
              <img src="<?= DEFAULT_TEMPLATE_PATH ?>/img/logo/main-logo.png" alt="Логотип" title="На главную" class="header__logo">
            </a>
            <div class="header__search header__search-icon">
              <input type="text" placeholder="Поиск.." class="header__search-input">
            </div>
            <button class="btn btn-red btn-call">
              <img class="btn-call-icon" src="<?= DEFAULT_TEMPLATE_PATH ?>/img/icons/phone.svg" alt="">
              Заказать звонок
            </button>
            <div class="header__account">
              <a href="" class="header__profile">
                <img src="<?= DEFAULT_TEMPLATE_PATH ?>/img/icons/profile.svg" alt="" class="header__account-img">
              </a>
              <a href="" class="header__favorite">
                <img src="<?= DEFAULT_TEMPLATE_PATH ?>/img/icons/favorite.svg" alt="" class="header__account-img">
              </a>
              <a href="" class="header__basket">
                <img src="<?= DEFAULT_TEMPLATE_PATH ?>/img/icons/basket.svg" alt="" class="header__account-img">
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="header__navbar">
        <div class="container">
          <? $APPLICATION->IncludeComponent(
            "bitrix:menu",
            "menu-top",
            array(
              "ALLOW_MULTI_SELECT" => "N",  // Разрешить несколько активных пунктов одновременно
              "CHILD_MENU_TYPE" => "top-second",  // Тип меню для остальных уровней
              "DELAY" => "N",  // Откладывать выполнение шаблона меню
              "MAX_LEVEL" => "2",  // Уровень вложенности меню
              "MENU_CACHE_GET_VARS" => array(  // Значимые переменные запроса
                0 => "",
              ),
              "MENU_CACHE_TIME" => "3600",  // Время кеширования (сек.)
              "MENU_CACHE_TYPE" => "N",  // Тип кеширования
              "MENU_CACHE_USE_GROUPS" => "Y",  // Учитывать права доступа
              "ROOT_MENU_TYPE" => "top",  // Тип меню для первого уровня
              "USE_EXT" => "N",  // Подключать файлы с именами вида .тип_меню.menu_ext.php
            ),
            false
          ); ?>
          <!-- <ul class="header__nav-list">
            <li id="catalog-link">
              <a href="" class="header__nav-link">Каталог</a>
              <ul class="submenu">
                <li><a href="" class="submenu-link">LED - экраны</a></li>
                <li><a href="" class="submenu-link">Звуковое оборудование</a></li>
                <li><a href="" class="submenu-link">Световое оборудование</a></li>
                <li><a href="" class="submenu-link">Сценические конструкции</a></li>
                <li><a href="" class="submenu-link">Эффекты</a></li>
              </ul>
            </li>
            <li><a href="" class="header__nav-link">Оплата и доставка</a></li>
            <li><a href="" class="header__nav-link">О компании</a></li>
            <li><a href="" class="header__nav-link">Видео</a></li>
            <li><a href="" class="header__nav-link">Бюджетным организациям</a></li>
            <li><a href="" class="header__nav-link">Контакты</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </header>
  <div class="main-content">