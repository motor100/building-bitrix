<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
  die();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <?$APPLICATION->ShowHead();?>
  <meta charset="utf-8">
  <title><?$APPLICATION->ShowTitle();?></title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?=SITE_TEMPLATE_PATH?>/images/favicon.svg" rel="icon" type="image/svg+xml" />

  <?php
  \Bitrix\Main\Loader::includeModule('iblock');
  //use Bitrix\Main\Page\Asset;
  //Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/imask.min.js");
  //Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/script.js");
  ?>

</head>
<body>
<?$APPLICATION->ShowPanel();?>
<header class="header js-sticky-header">
  <div class="container">
    <div class="flex-container">
      <div class="logo-wrapper">
        <div class="logo logo_anim _anim-items _anim-no-hide">
          <a href="/" class="logo-link">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/logo-new.svg" alt="">
          </a>
        </div>
      </div>
      <div class="top-menu">
        <div class="menu-item">
          <a href="/projects" class="menu-item__link">Проекты</a>
        </div>
        <div class="menu-item menu-item-has-children real-estate">
          <span class="menu-item__link">Недвижимость</span>
          <ul class="sub-menu">
            <li class="sub-menu-item">
              <a href="#" class="sub-menu-item__link">Квартиры</a>
            </li>
          </ul>
        </div>
        <div class="menu-item">
          <a href="/promo" class="menu-item__link">Акции</a>
        </div>
        <div class="menu-item">
          <a href="/mortgage" class="menu-item__link">Ипотека</a>
        </div>
        <div class="menu-item menu-item-has-children about-company">
          <span class="menu-item__link">О компании</span>
          <ul class="sub-menu">
            <li class="sub-menu-item">
              <a href="/about-company" class="sub-menu-item__link">О нас</a>
            </li>
            <li class="sub-menu-item">
              <a href="/partners" class="sub-menu-item__link">Партнерам</a>
            </li>
            <li class="sub-menu-item">
              <a href="/vacancy" class="sub-menu-item__link">Вакансии</a>
            </li>
            <li class="sub-menu-item">
              <a href="/documents" class="sub-menu-item__link">Документы</a>
            </li>
            <li class="sub-menu-item">
              <a href="/requisites" class="sub-menu-item__link">Реквизиты</a>
            </li>
            <li class="sub-menu-item">
              <a href="/contacts" class="sub-menu-item__link">Контакты</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="header-contacts hidden-mobile">
        <a href="tel:+79128979959" class="header-phone">+7 (912) 897 99 59</a>
        <button class="callback-me-btn quaternary-btn js-callback-btn">
          <span class="quaternary-btn__text">Перезвоните мне</span>
        </button>
      </div>
    </div>
  </div>
</header>