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

<div class="grid-container">

  <?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>

    <div class="projects-item">
      <div class="projects-item__image-wrapper">
        <div class="projects-item__image">
          <?php if ($arItem["DETAIL_PICTURE"]["SRC"]) { ?>
            <img src="<?php echo $arItem["DETAIL_PICTURE"]["SRC"]; ?>" alt="">
          <?php } else { ?>
            <img src="<?=SITE_TEMPLATE_PATH?>/images/no-photo.jpg" alt="">
          <?php } ?>
        </div>
        <div class="projects-item__filter"></div>
        <div class="projects-item__status"><?echo $arItem['PROPERTIES']['STATUS']['VALUE']?></div>
        <div class="projects-item__title"><?echo $arItem["NAME"]?></div>
        <div class="horizontal-line"></div>
        <div class="projects-item__location">Расположение</div>
        <div class="projects-item__city">
          <?php 
          echo $arItem['PROPERTIES']['CITY']['VALUE'];
          if ($arItem['PROPERTIES']['TOWN']['VALUE']) {
            echo ", " . $arItem['PROPERTIES']['TOWN']['VALUE'];
          }
          ?>
        </div>
        <div class="horizontal-line"></div>
        <div class="projects-item__price-text">Квартиры</div>
        <div class="projects-item__price">от <?echo $arItem['PROPERTIES']['AREA']['VALUE']?> кв.м.</div>
        <div class="flex-container">
          <!-- <a href="#" class="projects-item__btn view-flats-btn">Смотреть квартиры</a> -->
          <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="projects-item__btn about-project-btn">О проекте</a>
        </div>
      </div>
      <div class="projects-title"><?echo $arItem["NAME"]?></div>
      <div class="projects-city"><?echo $arItem['PROPERTIES']['CITY']['VALUE']?></div>
    </div>

  <?endforeach?>

</div>