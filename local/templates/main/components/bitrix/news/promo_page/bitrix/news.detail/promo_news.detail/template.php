<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
$APPLICATION->SetTitle($arResult["NAME"]);
?>

<div class="breadcrumbs">
  <div class="container">
    <div class="parent">
      <a href="/">Главная</a>
    </div>
    <div class="separator">|</div>
    <div class="parent">
      <a href="/promo">Акции</a>
    </div>
    <div class="separator">|</div>
    <div class="active"><?=$arResult["NAME"]?></div>
  </div>
</div>

<div class="np-detail-page">

  <div class="container">
    <div class="primary-title page-title"><?=$arResult["NAME"]?></div>
  </div>

  <div class="np-detail-content-section section">
    <div class="container">
      <?php if($arResult['PROPERTIES']['STOP_DATE']['VALUE']) { ?>
        <div class="np-detail__date">Акция действует до <?php echo $arResult['PROPERTIES']['STOP_DATE']['VALUE']; ?></div>
      <?php } ?>
      <?php if($arResult["PREVIEW_TEXT"]) { ?>
        <div class="np-detail__excerpt">В жилом комплексе «Павелецкая Сити» до конца июля действует скидка 20%* на приобретение квартиры.</div>
      <?php } ?>
      <div class="np-detail__text"><?echo $arResult["DETAIL_TEXT"];?></div>

      <?
      $res = CIBlockElement::GetByID($arResult['PROPERTIES']['PROJECT']['VALUE']);
      $ar_res = $res->GetNext();
      ?>

      <div class="np-detail__buttons">
        <a href="<?php echo $ar_res["DETAIL_PAGE_URL"]; ?>" class="view-more-btn tertiary-btn">
          <span class="tertiary-btn__text">Подробнее о проекте</span>
        </a>
        <a href="/contacts#big-booking-online-form-wrapper" class="make-an-appointment-btn primary-btn">
          <span class="primary-btn__text">Записаться на встречу</span>
        </a>
      </div>
    </div>
  </div>

  <div class="subscribe-section">
    <div class="container">
      <div class="dark-frame">
        <div class="subscribe-frame__title primary-title">Подпишитесь на рассылку</div>
        <div class="subscribe-frame__text">Только самая полезная информация о проектах и квартирах</div>

        <form id="subscribe-form" class="form">
          <div class="flex-container">
            <div class="form-group">
              <label for="big-form-name" class="label">Имя*</label>
              <input type="text" name="name" id="big-form-name" class="input-field js-required-name" autocomplete="on" placeholder="Введите имя">
            </div>
            <div class="form-group">
              <label for="big-form-email" class="label">Email*</label>
              <input type="email" name="email" id="big-form-email" class="input-field js-required-email" autocomplete="on" placeholder="pochta@mail.ru">
            </div>
            <button type="button" id="subscribe-form-btn" class="submit-btn tertiary-btn">
              <span class="tertiary-btn__text">Подписаться на рассылку</span>
            </button>
          </div>
          <div class="checkboxes-flex-container">
            <div class="agreement-text">
              <input type="checkbox" name="checkbox-read" class="custom-checkbox js-required-checkbox" id="checkbox-read-callback5" required onchange="document.getElementById('subscribe-form-btn').disabled = !this.checked;">
              <label for="checkbox-read-callback5" class="custom-checkbox-label"></label>
              <span class="checkbox-text">Ознакомлен (-на) с <a href="/privacy-policy" class="privacy-policy-link" target="_blank">политикой конфиденциальности</a></span>
            </div>
            <div class="agreement-text">
              <input type="checkbox" name="checkbox-agree" class="custom-checkbox js-required-checkbox" id="checkbox-agree-callback5" required onchange="document.getElementById('subscribe-form-btn').disabled = !this.checked;">
              <label for="checkbox-agree-callback5" class="custom-checkbox-label"></label>
              <span class="checkbox-text">Я согласен (-на) на <a href="/agreement" class="agreement-link" target="_blank">обработку персональных данных</a></span>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

</div>