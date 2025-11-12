<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О нас");

use Bitrix\Main\Page\Asset;
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/swiper-bundle.min.css");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/swiper-bundle.min.js");
?>

<div class="breadcrumbs">
  <div class="container">
    <div class="parent">
      <a href="/">Главная</a>
    </div>
    <div class="separator">|</div>
    <div class="active">О нас</div>
  </div>
</div>

<div class="about-company-page pa-page">

  <div class="title-section section">
    <div class="container">
      <div class="title-dark-frame">
        <div class="flex-container">
          <div class="description">
            <div class="description-title">ЭРИСТАВИ - лидер рынка Челябинской области</div>
            <div class="description-text">Эристави — надежный застройщик многоквартирных домов и коммерческой недвижимости, объединяющий профессионализм, опыт и современные стандарты строительства.</div>
            <div class="description-items">
              <div class="description-item">
                <div class="description-item__number">2008</div>
                <div class="description-item__text">дата основания</div>
              </div>

              <div class="description-item">
                <div class="description-item__image">
                  <img src="<?=SITE_TEMPLATE_PATH?>/images/house-heart.png" alt="">
                </div>
              </div>

              <div class="description-item">
                <div class="description-item__number">10.8K</div>
                <div class="description-item__text">реализованных кв.м.</div>
              </div>
            </div>
          </div>
          <div class="image">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/temp-granat1.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="logo-section section">
    <div class="container">
      <div class="logo">
        <img src="<?=SITE_TEMPLATE_PATH?>/images/logo-new.svg" alt="">
      </div>
      <div class="text">Компания Эристави гордится своей командой профессионалов, являющейся надёжным механизмом,  где каждый сотрудник -  ценный винтик, обладающий богатым опытом и глубокими знаниями в области строительства и недвижимости.</div>
    </div>
  </div>

  <div class="text-section section">
    <div class="container">
      <div class="text-section-flex-container t-flex-container">
        <div class="t-text">
          <p>Несмотря на относительную молодость, застройщик Эристави обладает огромным опытом и интересной историей становления.</p>
          <p>Наши основатели долгие годы накапливали незаменимые знания, квалификацию и навыки, работая в крупных компаниях на рынке недвижимости, реализуя проекты различной сложности — от малоэтажных до многоэтажных домов.</p>
        </div>
        <div class="t-image">
          <img src="<?=SITE_TEMPLATE_PATH?>/images/temp-granat1.jpg" alt="">
        </div>
      </div>
    </div>
  </div>

  <div class="values-section section">
    <div class="container">
      <div class="values-section-title">За это время сформировались ценности и стандарты, <br>которые сегодня лежат в основе нашей деятельности:</div>
      <div class="flex-container">
        <div class="values-item">
          <div class="values-item__image">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/magic-wand.png" alt="">
          </div>
          <div class="values-item__text">качество</div>
        </div>
        <div class="values-item">
          <div class="values-item__image">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/circles-three.png" alt="">
          </div>
          <div class="values-item__text">эргономичность</div>
        </div>
        <div class="values-item-white">
          <img src="<?=SITE_TEMPLATE_PATH?>/images/about-light-logo.png" alt="">
        </div>
        <div class="values-item">
          <div class="values-item__image">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/gear.png" alt="">
          </div>
          <div class="values-item__text">функциональность</div>
        </div>
      </div>
    </div>
  </div>

  <div class="description-section section">
    <div class="container">
      <div class="description-frame">
        <div class="top-frame">
          <div class="description-section-flex-container t-flex-container">
            <div class="t-text">
              <p>Понимая, что принятые нормы и правила, которые годами формировались у компаний работодателей, стали ограничивать развитие и реализацию новых идей, команда, принимая решение двигаться дальше, создала специализированного застройщика Эристави.</p>
              <p>Теперь мы стремимся создавать уникальные жилые пространства, отражающие современные требования и ожидания наших клиентов. Опыт и желание совершенствоваться позволяют воплощать в жизнь современные, комфортные и продуманные проекты.</p>
            </div>
            <div class="t-image">
              <img src="<?=SITE_TEMPLATE_PATH?>/images/temp-granat1.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="white-frame">
          <div class="text">Мы убеждены, что объединение профессионализма с инновационным подходом позволяет нам предлагать действительно качественные и востребованные решения для наших покупателей.</div>
          <div class="black-frame"> Выбирая Эристави, вы выбираете надежного партнера, который ценит своих клиентов и ориентирован на долгосрочные отношения.</div>
        </div>
      </div>
    </div>
  </div>

  <div class="our-advantages-section section">
    <div class="container">
      <div class="title-wrapper">
        <div class="our-advantages-section-title primary-title section-title fullscreen__title _anim-items _anim-no-hide">Преимущества работы с нами</div>
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

    <div class="our-advantages">
      <div class="container">

        <div class="our-advantages-slider-wrapper">
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

          <div class="our-advantages-image">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/about-company.jpg" alt="">
          </div>

        </div>

      </div>

    </div>

    <div class="container">
      <div class="mission-title">Миссия ЭРИСТАВИ  — раскрывать потенциал каждой локации и делать жизнь в наших домах источником положительных эмоций</div>
    </div>
  </div>

  <div class="our-values-section">
    <div class="container">
      <div class="primary-title section-title">Наши ценности</div>
      <div class="grid-container">
        <div class="our-values-item">
          <div class="our-values-item__title">Ориентация на результат</div>
          <div class="our-values-item__text">Мы не боимся ставить перед собой амбициозные цели и идти к ним</div>
          <div class="our-values-item__star">
            <svg viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_144_3578)">
              <path d="M33.9993 50.2272L48.5343 59.1655C48.9114 59.3944 49.348 59.5064 49.7887 59.4873C50.2295 59.4682 50.6547 59.3189 51.0106 59.0582C51.3665 58.7975 51.6372 58.4372 51.7883 58.0227C51.9395 57.6083 51.9644 57.1583 51.8599 56.7297L47.9074 40.0511L60.8434 28.8948C61.1732 28.6052 61.411 28.2254 61.5274 27.8022C61.6438 27.379 61.6337 26.931 61.4984 26.5134C61.3631 26.0959 61.1084 25.7271 60.7659 25.4526C60.4234 25.1782 60.008 25.01 59.571 24.9689L42.5949 23.5877L36.0552 7.7564C35.8885 7.34797 35.6039 6.99846 35.2378 6.75242C34.8716 6.50639 34.4404 6.375 33.9993 6.375C33.5582 6.375 33.127 6.50639 32.7608 6.75242C32.3947 6.99846 32.1101 7.34797 31.9434 7.7564L25.4037 23.5877L8.42759 24.9689C7.98762 25.0075 7.56879 25.175 7.22343 25.4502C6.87806 25.7255 6.62148 26.0965 6.48573 26.5168C6.34998 26.9371 6.34109 27.388 6.46016 27.8133C6.57924 28.2386 6.821 28.6194 7.15524 28.9081L20.0912 40.0644L16.1387 56.7297C16.0342 57.1583 16.0591 57.6083 16.2103 58.0227C16.3615 58.4372 16.6321 58.7975 16.988 59.0582C17.3439 59.3189 17.7691 59.4682 18.2099 59.4873C18.6507 59.5064 19.0872 59.3944 19.4643 59.1655L33.9993 50.2272Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </g>
              <defs>
              <clipPath id="clip0_144_3578">
              <rect width="68" height="68" fill="white"/>
              </clipPath>
              </defs>
            </svg>
          </div>
        </div>
        <div class="our-values-item">
          <div class="our-values-item__title">Ориентация на результат</div>
          <div class="our-values-item__text">Мы не боимся ставить перед собой амбициозные цели и идти к ним</div>
          <div class="our-values-item__star">
            <svg viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_144_3578)">
              <path d="M33.9993 50.2272L48.5343 59.1655C48.9114 59.3944 49.348 59.5064 49.7887 59.4873C50.2295 59.4682 50.6547 59.3189 51.0106 59.0582C51.3665 58.7975 51.6372 58.4372 51.7883 58.0227C51.9395 57.6083 51.9644 57.1583 51.8599 56.7297L47.9074 40.0511L60.8434 28.8948C61.1732 28.6052 61.411 28.2254 61.5274 27.8022C61.6438 27.379 61.6337 26.931 61.4984 26.5134C61.3631 26.0959 61.1084 25.7271 60.7659 25.4526C60.4234 25.1782 60.008 25.01 59.571 24.9689L42.5949 23.5877L36.0552 7.7564C35.8885 7.34797 35.6039 6.99846 35.2378 6.75242C34.8716 6.50639 34.4404 6.375 33.9993 6.375C33.5582 6.375 33.127 6.50639 32.7608 6.75242C32.3947 6.99846 32.1101 7.34797 31.9434 7.7564L25.4037 23.5877L8.42759 24.9689C7.98762 25.0075 7.56879 25.175 7.22343 25.4502C6.87806 25.7255 6.62148 26.0965 6.48573 26.5168C6.34998 26.9371 6.34109 27.388 6.46016 27.8133C6.57924 28.2386 6.821 28.6194 7.15524 28.9081L20.0912 40.0644L16.1387 56.7297C16.0342 57.1583 16.0591 57.6083 16.2103 58.0227C16.3615 58.4372 16.6321 58.7975 16.988 59.0582C17.3439 59.3189 17.7691 59.4682 18.2099 59.4873C18.6507 59.5064 19.0872 59.3944 19.4643 59.1655L33.9993 50.2272Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </g>
              <defs>
              <clipPath id="clip0_144_3578">
              <rect width="68" height="68" fill="white"/>
              </clipPath>
              </defs>
            </svg>
          </div>
        </div>
        <div class="our-values-item">
          <div class="our-values-item__title">Ориентация на результат</div>
          <div class="our-values-item__text">Мы не боимся ставить перед собой амбициозные цели и идти к ним</div>
          <div class="our-values-item__star">
            <svg viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_144_3578)">
              <path d="M33.9993 50.2272L48.5343 59.1655C48.9114 59.3944 49.348 59.5064 49.7887 59.4873C50.2295 59.4682 50.6547 59.3189 51.0106 59.0582C51.3665 58.7975 51.6372 58.4372 51.7883 58.0227C51.9395 57.6083 51.9644 57.1583 51.8599 56.7297L47.9074 40.0511L60.8434 28.8948C61.1732 28.6052 61.411 28.2254 61.5274 27.8022C61.6438 27.379 61.6337 26.931 61.4984 26.5134C61.3631 26.0959 61.1084 25.7271 60.7659 25.4526C60.4234 25.1782 60.008 25.01 59.571 24.9689L42.5949 23.5877L36.0552 7.7564C35.8885 7.34797 35.6039 6.99846 35.2378 6.75242C34.8716 6.50639 34.4404 6.375 33.9993 6.375C33.5582 6.375 33.127 6.50639 32.7608 6.75242C32.3947 6.99846 32.1101 7.34797 31.9434 7.7564L25.4037 23.5877L8.42759 24.9689C7.98762 25.0075 7.56879 25.175 7.22343 25.4502C6.87806 25.7255 6.62148 26.0965 6.48573 26.5168C6.34998 26.9371 6.34109 27.388 6.46016 27.8133C6.57924 28.2386 6.821 28.6194 7.15524 28.9081L20.0912 40.0644L16.1387 56.7297C16.0342 57.1583 16.0591 57.6083 16.2103 58.0227C16.3615 58.4372 16.6321 58.7975 16.988 59.0582C17.3439 59.3189 17.7691 59.4682 18.2099 59.4873C18.6507 59.5064 19.0872 59.3944 19.4643 59.1655L33.9993 50.2272Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </g>
              <defs>
              <clipPath id="clip0_144_3578">
              <rect width="68" height="68" fill="white"/>
              </clipPath>
              </defs>
            </svg>
          </div>
        </div>
        <div class="our-values-item">
          <div class="our-values-item__title">Ориентация на результат</div>
          <div class="our-values-item__text">Мы не боимся ставить перед собой амбициозные цели и идти к ним</div>
          <div class="our-values-item__star">
            <svg viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_144_3578)">
              <path d="M33.9993 50.2272L48.5343 59.1655C48.9114 59.3944 49.348 59.5064 49.7887 59.4873C50.2295 59.4682 50.6547 59.3189 51.0106 59.0582C51.3665 58.7975 51.6372 58.4372 51.7883 58.0227C51.9395 57.6083 51.9644 57.1583 51.8599 56.7297L47.9074 40.0511L60.8434 28.8948C61.1732 28.6052 61.411 28.2254 61.5274 27.8022C61.6438 27.379 61.6337 26.931 61.4984 26.5134C61.3631 26.0959 61.1084 25.7271 60.7659 25.4526C60.4234 25.1782 60.008 25.01 59.571 24.9689L42.5949 23.5877L36.0552 7.7564C35.8885 7.34797 35.6039 6.99846 35.2378 6.75242C34.8716 6.50639 34.4404 6.375 33.9993 6.375C33.5582 6.375 33.127 6.50639 32.7608 6.75242C32.3947 6.99846 32.1101 7.34797 31.9434 7.7564L25.4037 23.5877L8.42759 24.9689C7.98762 25.0075 7.56879 25.175 7.22343 25.4502C6.87806 25.7255 6.62148 26.0965 6.48573 26.5168C6.34998 26.9371 6.34109 27.388 6.46016 27.8133C6.57924 28.2386 6.821 28.6194 7.15524 28.9081L20.0912 40.0644L16.1387 56.7297C16.0342 57.1583 16.0591 57.6083 16.2103 58.0227C16.3615 58.4372 16.6321 58.7975 16.988 59.0582C17.3439 59.3189 17.7691 59.4682 18.2099 59.4873C18.6507 59.5064 19.0872 59.3944 19.4643 59.1655L33.9993 50.2272Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </g>
              <defs>
              <clipPath id="clip0_144_3578">
              <rect width="68" height="68" fill="white"/>
              </clipPath>
              </defs>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="awards-section">
    <div class="container">
      <div class="primary-title section-title">Награды</div>
      <div class="grid-container">
        <div class="awards-item">
          <img src="<?=SITE_TEMPLATE_PATH?>/images/no-photo.jpg" alt="">
        </div>
        <div class="awards-item">
          <img src="<?=SITE_TEMPLATE_PATH?>/images/no-photo.jpg" alt="">
        </div>
        <div class="awards-item">
          <img src="<?=SITE_TEMPLATE_PATH?>/images/no-photo.jpg" alt="">
        </div>
        <div class="awards-item">
          <img src="<?=SITE_TEMPLATE_PATH?>/images/no-photo.jpg" alt="">
        </div>
      </div>
    </div>
  </div>

  <div class="projects-section section">
    <div class="container">
      <div class="primary-title section-title">Проекты</div>
      <?php
      $APPLICATION->IncludeComponent(
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
);
      ?>
    </div>
  </div>

</div>

<script>
  const topMenuItemActive = 4;
</script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>