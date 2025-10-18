<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Проекты");
?>

<div class="breadcrumbs">
  <div class="container">
    <div class="parent">
      <a href="/">Главная</a>
    </div>
    <div class="separator">|</div>
    <div class="active">Наши проекты</div>
  </div>
</div>

<div class="projects-page">
  <div class="title-section">
    <div class="container">
      <div class="flex-container">
        <div class="section-title primary-title fullscreen__title _anim-items _anim-no-hide">Наши проекты</div>
        <a href="/projects-map" class="view-on-map-btn primary-btn">
          <span class="view-on-map-btn__text primary-btn__text">Смотреть на карте</span>
          <img src="<?=SITE_TEMPLATE_PATH?>/images/arrow-right-white.png" class="view-on-map-btn__image primary-btn__image" alt="">
        </a>
      </div>
    </div>
  </div>

  <div class="projects-section section">
    <div class="container">
      <div class="projects-section-title">В продаже</div>
      <?$APPLICATION->IncludeComponent(
				"bitrix:news", 
				"projects-progress", 
				array(
					"ACTIVE_DATE_FORMAT" => "d.m.Y",
					"ADD_ELEMENT_CHAIN" => "Y",
					"ADD_SECTIONS_CHAIN" => "N",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_ADDITIONAL" => "",
					"AJAX_OPTION_HISTORY" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_SHADOW" => "Y",
					"AJAX_OPTION_STYLE" => "Y",
					"BROWSER_TITLE" => "-",
					"CACHE_FILTER" => "N",
					"CACHE_GROUPS" => "Y",
					"CACHE_TIME" => "36000000",
					"CACHE_TYPE" => "A",
					"CHECK_DATES" => "Y",
					"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
					"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
					"DETAIL_DISPLAY_TOP_PAGER" => "N",
					"DETAIL_FIELD_CODE" => array(
						0 => "",
						1 => "",
					),
					"DETAIL_PAGER_SHOW_ALL" => "Y",
					"DETAIL_PAGER_TEMPLATE" => "arrows",
					"DETAIL_PAGER_TITLE" => "Страница",
					"DETAIL_PROPERTY_CODE" => array(
						0 => "",
						1 => "TEXT_TYPE",
						2 => "",
					),
					"DETAIL_URL" => "",
					"DISPLAY_BOTTOM_PAGER" => "Y",
					"DISPLAY_DATE" => "Y",
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PANEL" => "Y",
					"DISPLAY_PICTURE" => "Y",
					"DISPLAY_PREVIEW_TEXT" => "Y",
					"DISPLAY_TOP_PAGER" => "N",
					"FIELD_CODE" => array(
						0 => "CODE",
						1 => "",
					),
					"FILTER_NAME" => "",
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"IBLOCK_ID" => "6",
					"IBLOCK_TYPE" => "services",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"INCLUDE_SUBSECTIONS" => "Y",
					"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
					"LIST_FIELD_CODE" => array(
						0 => "DETAIL_PICTURE",
						1 => "",
					),
					"LIST_PROPERTY_CODE" => array(
						0 => "",
						1 => "TEXT_TYPE",
						2 => "",
					),
					"MESSAGE_404" => "",
					"META_DESCRIPTION" => "-",
					"META_KEYWORDS" => "-",
					"NEWS_COUNT" => "9",
					"NUM_DAYS" => "180",
					"NUM_NEWS" => "20",
					"PAGER_BASE_LINK_ENABLE" => "N",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
					"PAGER_SHOW_ALL" => "N",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_TEMPLATE" => "arrows",
					"PAGER_TITLE" => "Проекты",
					"PARENT_SECTION" => "6",
					"PARENT_SECTION_CODE" => "",
					"PREVIEW_TRUNCATE_LEN" => "",
					"PROPERTY_CODE" => array(
						0 => "",
						1 => "",
					),
					"SEF_FOLDER" => "/projects/",
					"SEF_MODE" => "Y",
					"SET_BROWSER_TITLE" => "Y",
					"SET_LAST_MODIFIED" => "N",
					"SET_META_DESCRIPTION" => "Y",
					"SET_META_KEYWORDS" => "Y",
					"SET_STATUS_404" => "N",
					"SET_TITLE" => "Y",
					"SHOW_404" => "N",
					"SLIDER_PROPERTY" => "PICS_NEWS",
					"SORT_BY1" => "ACTIVE_FROM",
					"SORT_BY2" => "SORT",
					"SORT_ORDER1" => "DESC",
					"SORT_ORDER2" => "ASC",
					"STRICT_SECTION_CHECK" => "N",
					"TEMPLATE_THEME" => "site",
					"USE_CATEGORIES" => "N",
					"USE_FILTER" => "N",
					"USE_PERMISSIONS" => "N",
					"USE_RATING" => "N",
					"USE_REVIEW" => "N",
					"USE_RSS" => "N",
					"USE_SEARCH" => "N",
					"YANDEX" => "N",
					"COMPONENT_TEMPLATE" => "projects",
					"USE_SHARE" => "N",
					"DETAIL_SET_CANONICAL_URL" => "N",
					"SEF_URL_TEMPLATES" => array(
						"news" => "",
						"section" => "",
						"detail" => "#ELEMENT_CODE#/",
					)
				),
				false
			);?>

    </div>
  </div>

  <div class="projects-section section">
    <div class="container">
      <div class="projects-section-title">Реализованные</div>
        
      <?$APPLICATION->IncludeComponent(
        "bitrix:news", 
        "projects-complete", 
        array(
          "ACTIVE_DATE_FORMAT" => "d.m.Y",
          "ADD_ELEMENT_CHAIN" => "Y",
          "ADD_SECTIONS_CHAIN" => "N",
          "AJAX_MODE" => "N",
          "AJAX_OPTION_ADDITIONAL" => "",
          "AJAX_OPTION_HISTORY" => "N",
          "AJAX_OPTION_JUMP" => "N",
          "AJAX_OPTION_SHADOW" => "Y",
          "AJAX_OPTION_STYLE" => "Y",
          "BROWSER_TITLE" => "-",
          "CACHE_FILTER" => "N",
          "CACHE_GROUPS" => "Y",
          "CACHE_TIME" => "36000000",
          "CACHE_TYPE" => "A",
          "CHECK_DATES" => "Y",
          "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
          "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
          "DETAIL_DISPLAY_TOP_PAGER" => "N",
          "DETAIL_FIELD_CODE" => array(
            0 => "",
            1 => "",
          ),
          "DETAIL_PAGER_SHOW_ALL" => "Y",
          "DETAIL_PAGER_TEMPLATE" => "arrows",
          "DETAIL_PAGER_TITLE" => "Страница",
          "DETAIL_PROPERTY_CODE" => array(
            0 => "",
            1 => "TEXT_TYPE",
            2 => "",
          ),
          "DETAIL_URL" => "",
          "DISPLAY_BOTTOM_PAGER" => "Y",
          "DISPLAY_DATE" => "Y",
          "DISPLAY_NAME" => "Y",
          "DISPLAY_PANEL" => "Y",
          "DISPLAY_PICTURE" => "Y",
          "DISPLAY_PREVIEW_TEXT" => "Y",
          "DISPLAY_TOP_PAGER" => "N",
          "FIELD_CODE" => array(
            0 => "CODE",
            1 => "",
          ),
          "FILTER_NAME" => "",
          "HIDE_LINK_WHEN_NO_DETAIL" => "N",
          "IBLOCK_ID" => "6",
          "IBLOCK_TYPE" => "services",
          "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
          "INCLUDE_SUBSECTIONS" => "Y",
          "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
          "LIST_FIELD_CODE" => array(
            0 => "DETAIL_PICTURE",
            1 => "",
          ),
          "LIST_PROPERTY_CODE" => array(
            0 => "",
            1 => "TEXT_TYPE",
            2 => "",
          ),
          "MESSAGE_404" => "",
          "META_DESCRIPTION" => "-",
          "META_KEYWORDS" => "-",
          "NEWS_COUNT" => "6",
          "NUM_DAYS" => "180",
          "NUM_NEWS" => "20",
          "PAGER_BASE_LINK_ENABLE" => "N",
          "PAGER_DESC_NUMBERING" => "N",
          "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
          "PAGER_SHOW_ALL" => "N",
          "PAGER_SHOW_ALWAYS" => "N",
          "PAGER_TEMPLATE" => "arrows",
          "PAGER_TITLE" => "Новости",
          "PARENT_SECTION" => "5",
          "PARENT_SECTION_CODE" => "",
          "PREVIEW_TRUNCATE_LEN" => "",
          "PROPERTY_CODE" => array(
            0 => "",
            1 => "",
          ),
          "SEF_FOLDER" => "/projects/",
          "SEF_MODE" => "Y",
          "SET_BROWSER_TITLE" => "Y",
          "SET_LAST_MODIFIED" => "N",
          "SET_META_DESCRIPTION" => "Y",
          "SET_META_KEYWORDS" => "Y",
          "SET_STATUS_404" => "Y",
          "SET_TITLE" => "Y",
          "SHOW_404" => "N",
          "SLIDER_PROPERTY" => "PICS_NEWS",
          "SORT_BY1" => "ACTIVE_FROM",
          "SORT_BY2" => "SORT",
          "SORT_ORDER1" => "DESC",
          "SORT_ORDER2" => "ASC",
          "STRICT_SECTION_CHECK" => "N",
          "TEMPLATE_THEME" => "site",
          "USE_CATEGORIES" => "N",
          "USE_FILTER" => "N",
          "USE_PERMISSIONS" => "N",
          "USE_RATING" => "N",
          "USE_REVIEW" => "N",
          "USE_RSS" => "N",
          "USE_SEARCH" => "N",
          "YANDEX" => "N",
          "COMPONENT_TEMPLATE" => "projects",
          "USE_SHARE" => "N",
          "DETAIL_SET_CANONICAL_URL" => "N",
          "SEF_URL_TEMPLATES" => array(
            "news" => "",
            "section" => "",
            "detail" => "#ELEMENT_CODE#/",
          )
        ),
        false
      );?>

    </div>
  </div>

</div>

<script>
  const topMenuItemActive = 0;
</script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>