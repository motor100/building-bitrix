<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "Квартира, новостройка");
$APPLICATION->SetPageProperty("description", "Строительство и продажа квартир в Челябинске");
$APPLICATION->SetTitle("Эристави | Квартиры в новостройках в Челябинске и области");

use Bitrix\Main\Page\Asset;
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/swiper-bundle.min.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/slimselect.min.css");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/swiper-bundle.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/slimselect.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/imask.min.js");
?>

<div class="home-page">
  <div class="main-section section">
    <div class="container">
      <div id="parallax" class="main-image">
        <div class="main-filter"></div>
        <div class="main-title mainscreen__title _anim-items _anim-no-hide"><span class="text-semibold">ЭРИСТАВИ — ваш надежный партнер в создании будущего</span> <br>Квартиры в Челябинске и Челябинской области</div>
        <div id="video-btn" class="main-video">
          <div class="main-video__cover">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/main-video-cover-new.jpg" alt="">
          </div>
          <div class="main-video__play">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/play-icon.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="projects-map-section section">
    <div class="container">
      <div class="projects-map-section-title primary-title section-title fullscreen__title _anim-items _anim-no-hide">Карта проектов</div>
      <div class="projects-map">
        <div class="projects-map__image">
          <img src="<?=SITE_TEMPLATE_PATH?>/images/temp-office-map.jpg" alt="">
        </div>
        <a href="/projects-map" class="projects-map-btn quaternary-btn">
          <span class="quaternary-btn__text">Смотреть карту проектов</span>
          <img src="<?=SITE_TEMPLATE_PATH?>/images/arrow-right-white.png" class="quaternary-btn__image" alt="">
        </a>
      </div>
    </div>
  </div>

  <div class="projects-section section">
    <div class="container">
      <div class="projects-section-title primary-title section-title fullscreen__title _anim-items _anim-no-hide">Наши проекты</div>

      <?$APPLICATION->IncludeComponent(
      	"bitrix:news", 
      	"projects_home", 
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
      		"PARENT_SECTION" => "",
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
      		"SET_TITLE" => "N",
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

      <a href="/projects" class="view-all-btn quaternary-btn">
        <span class="view-all-btn__text quaternary-btn__text">Смотреть все</span>
        <img src="<?=SITE_TEMPLATE_PATH?>/images/arrow-right-white.png" class="quaternary-btn__image" alt="">
      </a>
    </div>
  </div>

  <div class="our-advantages-section section">
    <div class="container">
      <div class="title-wrapper">
        <div class="our-advantages-section-title primary-title section-title fullscreen__title _anim-items _anim-no-hide">Наши преимущества</div>
        <div class="swiper-nav">
          <div class="swiper-prev">
            <span></span>
          </div>
          <div class="swiper-next">
            <span></span>
          </div>
        </div>
      </div>
    </div>
    <div class="our-advantages-slider-wrapper">
      <div class="container">
        <div class="our-advantages-slider swiper">
          <div class="swiper-wrapper">
            <div class="our-advantages-item swiper-slide">
              <div class="our-advantages-item__title"><span class="white-color">Высокие темпы</span> строительства</div>
            </div>
            <div class="our-advantages-item swiper-slide">
              <div class="our-advantages-item__title"><span class="white-color">Своевременная</span> сдача домов</div>
            </div>
            <div class="our-advantages-item swiper-slide">
              <div class="our-advantages-item__title"><span class="white-color">Разнообразие</span> проектов</div>
            </div>
            <div class="our-advantages-item swiper-slide">
              <div class="our-advantages-item__title"><span class="white-color">Участие в развитии</span> территории</div>
            </div>
            <div class="our-advantages-item swiper-slide">
              <div class="our-advantages-item__title"><span class="white-color">Детальная</span> проработка планировок</div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="callback-section">
    <div class="container">
      <div class="dark-frame">
        <div class="dark-frame__title primary-title">Свяжитесь с нами и наш менеджер подберет квартиру под ваш запрос</div>
        <div class="dark-frame__text">оставьте заявку и наш менеджер с вами свяжется в ближайшее время</div>
      </div>
    </div>

    <div id="big-booking-online-form-wrapper" class="booking-online-form-wrapper big-booking-online-form-wrapper">
      <div class="container">
        <div class="form-wrapper">
          <div class="form-title primary-title">Запись на встречу</div>
          <div class="form-text">Онлайн или в офисе продаж. Персональный менеджер поможет вам подобрать выгодное предложение.</div>
          <form id="big-booking-online-form" class="form">
            <div class="flex-container">
              <div class="form-group">
                <label for="big-form-name" class="label">Имя*</label>
                <input type="text" name="name" id="big-form-name" class="input-field js-required-name" required placeholder="Введите имя" autocomplete="on">
              </div>
              <div class="form-group">
                <label for="big-form-email" class="label">Email*</label>
                <input type="email" name="email" id="big-form-email" class="input-field js-required-email" required placeholder="pochta@mail.ru" autocomplete="on">
              </div>
              <div class="form-group">
                <label for="big-form-phone" class="label">Телефон*</label>
                <input type="text" name="phone" id="big-form-phone" class="input-field js-required-phone js-input-phone-mask" required placeholder="+7 (999) 999 99 99" autocomplete="on">
              </div>
              <div class="form-group">
                <label for="big-form-project" class="label">Проект*</label>
                <select name="project" id="big-form-project" class="js-required-project" required autocomplete="off">
                  <option value="" data-placeholder="true">Выберите проект</option>

                  <?php
                  $arFilter = Array("IBLOCK_ID" => 6, "SECTION_ID" => 5);
                  $res = CIBlockElement::GetList(array(), $arFilter, false, Array("nPageSize"=>5));

                  while($ob = $res->GetNextElement()) {
                    $arFields = $ob->GetFields(); ?>
                    <option value="<?php echo $arFields["NAME"]; ?>"><?php echo $arFields["NAME"]; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <button type="button" class="more-info-btn tertiary-btn">
              <span class="tertiary-btn__text">Дополнительно</span>
              <img src="<?=SITE_TEMPLATE_PATH?>/images/plus-circle.svg" class="tertiary-btn__image" alt="">
            </button>

            <div class="form-groups-wrapper">
              <div class="flex-container flex-container-bottom open-more-info js-open-more-info">
                <div class="form-group">
                  <label for="big-form-type-meeting" class="label">Тип встречи</label>
                  <select name="type-meeting" id="big-form-type-meeting" autocomplete="off">
                    <option value="" data-placeholder="true">Выберите тип</option>
                    <option value="Оформление">Оформление</option>
                    <option value="Консультация">Консультация</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="big-form-type-room" class="label">Тип недвижимости</label>
                  <select name="type-room" id="big-form-type-room" autocomplete="off">
                    <option value="" data-placeholder="true">Выберите тип</option>
                    <option value="Квартира">Квартира</option>
                    <option value="Коммерция">Коммерция</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="big-form-type-payment" class="label">Вид оплаты</label>
                  <select name="type-payment" id="big-form-type-payment" autocomplete="off">
                    <option value="" data-placeholder="true">Выберите тип</option>
                    <option value="Собственные средства">Собственные средства</option>
                    <option value="Кредит">Кредит</option>
                  </select>
                </div>
              </div>
              <button type="button" id="big-booking-online-form-btn" class="submit-btn quaternary-btn">
                <span class="quaternary-btn__text">Записаться на встречу</span>
              </button>
            </div>            
            
            <div class="checkboxes-flex-container">
              <div class="agreement-text">
                <input type="checkbox" name="checkbox-read" class="custom-checkbox js-required-checkbox" id="checkbox-read-callback4" required onchange="document.getElementById('big-booking-online-form-btn').disabled = !this.checked;">
                <label for="checkbox-read-callback4" class="custom-checkbox-label"></label>
                <span class="checkbox-text">Ознакомлен (-на) с <a href="/privacy-policy.html" class="privacy-policy-link" target="_blank">политикой конфиденциальности</a></span>
              </div>
              <div class="agreement-text">
                <input type="checkbox" name="checkbox-agree" class="custom-checkbox js-required-checkbox" id="checkbox-agree-callback3" required onchange="document.getElementById('big-booking-online-form-btn').disabled = !this.checked;">
                <label for="checkbox-agree-callback3" class="custom-checkbox-label"></label>
                <span class="checkbox-text">Я согласен (-на) на <a href="/soglasie-posetitelya-sajta-na-obrabotku-personalnyh-dannyh.html" class="agreement-link" target="_blank">обработку персональных данных</a></span>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="about-company-section">
    <div class="container">
      <div class="about-company-section-title primary-title section-title fullscreen__title _anim-items _anim-no-hide">О компании</div>
      <div class="flex-container">
        <div class="about-company-content">
          <div class="about-company-text">
            <p>Эристави — надежный застройщик многоквартирных домов и коммерческой недвижимости, объединяющий профессионализм, опыт и современные стандарты строительства.</p>
            <p>Мы создаем комфортные и безопасные жилые комплексы, отвечающие высоким требованиям качества и инфраструктуры.</p>
            <p>В основе нашей работы — забота о комфорте будущих жителей, продуманные планировки, современные архитектурные решения и соблюдение сроков реализации проектов.</p>
            <p>Стремясь к совершенству, мы реализуем идеи, которые делают жизнь в наших домах удобной, гармоничной и приятной. Выбирая нас, вы выбираете надежного партнера для создания вашего будущего дома.</p>
          </div>
          <div class="about-company-accent">
            <div class="about-company-accent__text">Выбирая нас, вы выбираете надежного партнера для создания вашего будущего дома.</div>
            <div class="about-company-accent__image">
              <img src="<?=SITE_TEMPLATE_PATH?>/images/logo-white.png" alt="">
            </div>
          </div>
          <a href="/about-company" class="about-company-btn">
            <span class="about-company-btn__text">История создания</span>
            <img src="<?=SITE_TEMPLATE_PATH?>/images/arrow-right-dark.png" class="about-company-btn__image" alt="">
          </a>
        </div>
        <div class="about-company-image">
          <img src="<?=SITE_TEMPLATE_PATH?>/images/temp-about-company.jpg" alt="">
        </div>
      </div>
    </div>
  </div>

  <div class="follow-section">
    <div class="container">
      <div class="follow-section-frame">
        <div class="follow-section-title primary-title">Следите за нашими акционными предложениями и не упустите возможность приобрести жилье по выгодным условиям!</div>
        <a href="/promo" class="follow-section-btn tertiary-btn">
          <span class="follow-section-btn__text tertiary-btn__text">Узнать подробнее</span>
          <img src="<?=SITE_TEMPLATE_PATH?>/images/arrow-right-blue.svg" class="tertiary-btn__image" alt="">
        </a>
      </div>
    </div>
  </div>

</div>

<div id="video-modal" class="modal-window video-modal">
  <div class="modal-wrapper">
    <div class="modal-area">
      <div class="modal-close">
        <div class="close"></div>
      </div>
      <div class="modal-content">
        <video src="<?=SITE_TEMPLATE_PATH?>/video/ya-vybirayu-chelgu.mp4" id="video" controls></video>
      </div>
    </div>
  </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>