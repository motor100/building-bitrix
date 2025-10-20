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
$APPLICATION->SetTitle("Акции");
?>

<div class="news-section">
  <div class="container">
    <div class="grid-container">

      <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>

        <div class="news-item">
          <div class="news-item__image">
            <?php if ($arItem["DETAIL_PICTURE"]["SRC"]) { ?>
              <img src="<?php echo $arItem["DETAIL_PICTURE"]["SRC"]; ?>" alt="">
            <?php } else { ?>
              <img src="<?=SITE_TEMPLATE_PATH?>/images/no-photo.jpg" alt="">
            <?php } ?>
          </div>        
          <div class="news-item__title"><?php echo $arItem["NAME"]?></div>
          <div class="flex-container">
            <div class="news-item__date"><?php echo mb_substr($arItem["TIMESTAMP_X"], 0, 10); ?></div>
            <div class="button-next">
              <div class="arrow-right"></div>
            </div>
          </div>
          <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="full-link"></a>
        </div>
      <?endforeach?>

    </div>
  </div>
</div>