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
?>

<?php if(count($arResult["ITEMS"]) > 0) { ?>

  <div class="grid-container">

    <?foreach($arResult["ITEMS"] as $arItem):?>
      <?
      $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
      $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
      ?>

      <div class="vacancy-item">
        <div class="vacancy-item__title"><?echo $arItem["NAME"]?></div>
        <div class="vacancy-item__income"><?echo $arItem['PROPERTIES']['INCOME']['VALUE']?></div>
        <div class="flex-container">
          <div class="vacancy-item__info vacancy-item__experience">Опыт <?echo $arItem['PROPERTIES']['EXPERIENCE']['VALUE']?> г</div>
          <div class="vacancy-item__info vacancy-item__format"><?echo $arItem['PROPERTIES']['FORMAT']['VALUE']?></div>
        </div>
        <a href="#" class="more-info-btn quaternary-btn">
          <span class="quaternary-btn__text">Подробнее</span>
        </a>
      </div>

    <?endforeach?>

  </div>

<?php } else { ?>

  <div class="no-vacancy-text">
    <p>Спасибо за интерес к работе в нашей компании!</p>
    <p>На данный момент у нас нет открытых вакансий. Мы постоянно развиваемся и растем, поэтому рекомендуем Вам периодически возвращаться на эту страницу, чтобы первыми узнавать о новых возможностях и открытых позициях.</p>
    <p>Если вы хотите стать частью нашей команды в будущем, пожалуйста, отправьте нам свое резюме на электронную почту <u>eristavi.74sz@gmail.com</u> с темой «Соискатель». Мы обязательно рассмотрим Вашу кандидатуру, когда появятся подходящие вакансии.</p>
    <p>Мы ценим амбициозных и увлеченных профессионалов, готовых строить вместе с нами будущее!</p>
  </div>

<?php } ?>