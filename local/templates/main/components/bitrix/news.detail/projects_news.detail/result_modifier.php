<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogElementComponent $component
 */

//$component = $this->getComponent();
//$arParams = $component->applyTemplateModifications();

// Галерея
$arResult["MORE_PHOTO"] = array();   
if (isset($arResult["PROPERTIES"]["MORE_PHOTO"]["VALUE"]) && is_array($arResult["PROPERTIES"]["MORE_PHOTO"]["VALUE"])) {   
  foreach ($arResult["PROPERTIES"]["MORE_PHOTO"]["VALUE"] as $FILE) {   
    $FILE = CFile::GetFileArray($FILE);   
    if (is_array($FILE)) {
        $arResult["MORE_PHOTO"][]=$FILE;   
    }
  }
}

// Файл PDF
if (isset($arResult["PROPERTIES"]["FILE_PDF"]["VALUE"])) {
    $FILE = CFile::GetPath($arResult["PROPERTIES"]["FILE_PDF"]["VALUE"]);
    $arResult["FILE_PDF"] = $FILE;
}
