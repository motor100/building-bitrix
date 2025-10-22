<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Наш отзывы");

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
	<div class="active">Наши отзывы</div>
  </div>
</div>

<div class="testimonials-page">

  <div class="testimonials-section section">
	<div class="container">
	  	<div class="section-title-wrapper">
			<div class="section-title primary-title">Наши отзывы</div>
			<div class="swiper-nav">
			  <div class="swiper-prev">
				<span></span>
			  </div>
			  <div class="swiper-next">
				<span></span>
			  </div>
			</div>        
	  	</div>

		<?$APPLICATION->IncludeComponent(
			"bitrix:forum.topic.reviews", 
			"project_reviews", 
			array(
				"FORUM_ID" => "1",
				"IBLOCK_TYPE" => "services",
				"IBLOCK_ID" => "6",
				"ELEMENT_ID" => "34",
				"URL_TEMPLATES_READ" => "read.php?FID=#FID#&TID=#TID#",
				"URL_TEMPLATES_DETAIL" => "photo_detail.php?ID=#ELEMENT_ID#",
				"URL_TEMPLATES_PROFILE_VIEW" => "profile_view.php?UID=#UID#",
				"MESSAGES_PER_PAGE" => "10",
				"PAGE_NAVIGATION_TEMPLATE" => "",
				"EDITOR_CODE_DEFAULT" => "Y",
				"SHOW_AVATAR" => "Y",
				"SHOW_RATING" => "N",
				"RATING_TYPE" => "",
				"USE_CAPTCHA" => "Y",
				"PREORDER" => "Y",
				"CACHE_TYPE" => "A",
				"CACHE_TIME" => "0",
				"COMPONENT_TEMPLATE" => "project_reviews"
			),
			false
		);?>

	</div>
  </div>

</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>