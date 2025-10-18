<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");

?>

<div class="page-404">
  <div class="container">
    <div class="page-404-image">
      <img src="<?=SITE_TEMPLATE_PATH?>/images/logo-new.svg" alt="">
    </div>
    <div class="page-404-title">Упс! Страница не найдена</div>
    <div class="page-404-text">Похоже, эта страница еще на стадии строительства или мы не успели ее завершить. Вы можете перейти на главную или выбрать квартиру.</div>
    <div class="flex-container">
      <a href="/" class="home-page-btn quaternary-btn">
        <span class="quaternary-btn__text">На главную</span>
      </a>
    </div>
  </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>