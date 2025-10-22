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

$this->addExternalCss(SITE_TEMPLATE_PATH . "/css/photoswipe.css");
$this->addExternalCss(SITE_TEMPLATE_PATH . "/css/swiper-bundle.min.css");
$this->addExternalJs(SITE_TEMPLATE_PATH . "/js/swiper-bundle.min.js");
$this->addExternalJs(SITE_TEMPLATE_PATH . "/js/imask.min.js");
?>

<?php 
$working_progress = $arResult['PROPERTIES']['WORKING_PROGRESS']['VALUE'];
$status = $arResult['PROPERTIES']['STATUS']['VALUE'];
$advantages = $arResult['PROPERTIES']['ADVANTAGES']['VALUE'];
?>

<div class="breadcrumbs">
	<div class="container">
		<div class="parent">
		<a href="/">Главная</a>
		</div>
		<div class="separator">|</div>
		<div class="parent">
		<a href="/projects">Проекты</a>
		</div>
		<div class="separator">|</div>
		<div class="active"><?=$arResult["NAME"]?></div>
	</div>
</div>

<div class="project-detail-page">

	<div class="title-section">
		<div class="container">
		<div class="flex-container">
			<div class="title-wrapper">
			<div class="project-detail-title primary-title section-title"><?=$arResult["NAME"]?></div>
			<div class="title-buttons hidden-mobile">
				<?php if($arResult['PROPERTIES']['LANDING_LINK']['VALUE']) { ?>
					<a href="<?php echo $arResult['PROPERTIES']['LANDING_LINK']['VALUE']; ?>" class="view-more-btn quaternary-btn" target="_blank">
						<span class="view-more-btn__text quaternary-btn__text">Подробнее о ЖК</span>
						<img src="<?=SITE_TEMPLATE_PATH?>/images/arrow-right-white.png" class="view-more-btn__image quaternary-btn__image" alt="">
					</a>
				<?php } ?>
				<?php if($status == "Сдан" || $status == "Продажи завершены") { ?>
					<a href="#" class="testimonial-btn tertiary-btn">
					<span class="tertiary-btn__text">Отзывы</span>
					</a>
				<?php } ?>
			</div>
			</div>
			<div class="make-an-appointment-wrapper">

			<?php if($status != "Продажи завершены") { ?>
				<a href="/granat-vidget" target="_blank" class="flats-btn tertiary-btn">
					<span class="tertiary-btn__text flats-btn__text">Квартиры</span>
				</a>
			<?php } ?>

			<?php if($status == "Сдан" || $status == "Продажи завершены") { ?>
				<a href="#" class="testimonial-btn tertiary-btn testimonial-mobile-btn">
					<span class="tertiary-btn__text">Отзывы</span>
				</a>
			<?php } ?>

			<?php if($status != "Продажи завершены") { ?>
				<a href="#booking-online-form-wrapper" class="make-an-appointment-btn primary-btn">
					<span class="make-an-appointment-btn__text primary-btn__text">Записаться на встречу</span>
					<img src="<?=SITE_TEMPLATE_PATH?>/images/arrow-right-white.png" class="make-an-appointment-btn__image primary-btn__image" alt="">
				</a>
			<?php } ?>

			</div>
		</div>
		<div class="horizontal-line"></div>
		</div>
	</div>

	<div class="slider-section section">
		<div class="container">

			<div class="details hidden-desktop">
				<div class="details-title"><?=$arResult["NAME"]?></div>
				<div class="details-city"><?=$arResult['PROPERTIES']["CITY"]['VALUE']?>, <?=$arResult['PROPERTIES']["ADDRESS"]['VALUE']?></div>
				<div class="details-row details-row-top">
					<div class="title">Сдача дома</div>
					<div class="value"><?=$arResult['PROPERTIES']["COMPLETE_PERIOD"]['VALUE']?></div>
				</div>
				<div class="details-row">
					<div class="title">Класс жилья</div>
					<div class="value"><?=$arResult['PROPERTIES']["HOUSE_CLASS"]['VALUE']?></div>
				</div>
				<div class="details-row">
					<div class="title">Этажность</div>
					<div class="value"><?=$arResult['PROPERTIES']["FLOORS"]['VALUE']?></div>
				</div>
				<!-- 
				<div class="details-row">
					<div class="title">Количество корпусов</div>
					<div class="value"><?=$arResult['PROPERTIES']["BUILDINGS_COUNT"]['VALUE']?></div>
				</div>
				 -->
				<div class="details-row">
					<div class="title">Количество квартир</div>
					<div class="value"><?=$arResult['PROPERTIES']["FLATS_COUNT"]['VALUE']?></div>
				</div>
				<div class="details-row">
					<div class="title">Количество парковочных мест</div>
					<div class="value"><?=$arResult['PROPERTIES']["PARKING_SPACES_COUNT"]['VALUE']?></div>
				</div>
				<div class="details-row">
					<div class="title">Стоимость 1-комнатной квартиры</div>
					<div class="value">4-5 млн.р.</div>
				</div>
				<div class="details-row">
					<div class="title">Стоимость 2-комнатной квартиры</div>
					<div class="value">5-6 млн.р.</div>
				</div>
				<div class="details-row">
					<div class="title">Стоимость 3-комнатной квартиры</div>
					<div class="value">6-7 млн.р.</div>
				</div>
			</div>

			<?php if($arResult['PROPERTIES']['LANDING_LINK']['VALUE']) { ?>
				<a href="<?php echo $arResult['PROPERTIES']['LANDING_LINK']['VALUE']; ?>" class="view-more-mobile-btn" target="_blank">
					<span class="view-more-mobile-btn__text">Подробнее о ЖК</span>
				</a>
			<?php } ?>

			<?php if($arResult["FILE_PDF"]) { ?>
				<a href="<?php echo $arResult["FILE_PDF"]; ?>" class="download-presentation-btn quaternary-btn download-presentation-hidden-desktop" target="_blank">
					<span class="download-presentation-btn__text quaternary-btn__text">Скачать презентацию</span>
					<img src="<?=SITE_TEMPLATE_PATH?>/images/arrow-right-white.png" class="download-presentation-btn__image quaternary-btn__image" alt="">
				</a>
			<?php } ?>

			<div class="slider-wrapper">

				<div class="project-detail-slider swiper">
					<div class="swiper-wrapper">
						<div class="project-slider-item swiper-slide">
							<div class="project-slider-item__image">
								<img src="<?php echo $arResult["DETAIL_PICTURE"]["SRC"]; ?>" alt="">
							</div>
						</div>
						<?php foreach ($arResult['MORE_PHOTO'] as $key => $photo) { ?>
							<div class="project-slider-item swiper-slide">
								<div class="project-slider-item__image">
									<img src="<?=$photo['SRC']?>" alt="">
								</div>
							</div>
						<?php } ?>
					</div>
				</div>

				<div class="details hidden-mobile">
					<div class="details-title"><?=$arResult["NAME"]?></div>
					<div class="details-city"><?=$arResult['PROPERTIES']["CITY"]['VALUE']?>, <?=$arResult['PROPERTIES']["ADDRESS"]['VALUE']?></div>
					<div class="details-row details-row-top">
						<div class="title">Сдача дома</div>
						<div class="value"><?=$arResult['PROPERTIES']["COMPLETE_PERIOD"]['VALUE']?></div>
					</div>
					<div class="details-row">
						<div class="title">Класс жилья</div>
						<div class="value"><?=$arResult['PROPERTIES']["HOUSE_CLASS"]['VALUE']?></div>
					</div>
					<div class="details-row">
						<div class="title">Этажность</div>
						<div class="value"><?=$arResult['PROPERTIES']["FLOORS"]['VALUE']?></div>
					</div>
					<!-- 
					<div class="details-row">
						<div class="title">Количество корпусов</div>
						<div class="value"><?=$arResult['PROPERTIES']["BUILDINGS_COUNT"]['VALUE']?></div>
					</div>
					 -->
					<div class="details-row">
						<div class="title">Количество квартир</div>
						<div class="value"><?=$arResult['PROPERTIES']["FLATS_COUNT"]['VALUE']?></div>
					</div>
					<div class="details-row">
						<div class="title">Количество парковочных мест</div>
						<div class="value"><?=$arResult['PROPERTIES']["PARKING_SPACES_COUNT"]['VALUE']?></div>
					</div>
					<div class="details-row">
						<div class="title">Стоимость 1-комнатной квартиры</div>
						<div class="value">4-5 млн.р.</div>
					</div>
					<div class="details-row">
						<div class="title">Стоимость 2-комнатной квартиры</div>
						<div class="value">5-6 млн.р.</div>
					</div>
					<div class="details-row">
						<div class="title">Стоимость 3-комнатной квартиры</div>
						<div class="value">6-7 млн.р.</div>
					</div>
				</div>
				<?php if($arResult["FILE_PDF"]) { ?>
					<a href="<?php echo $arResult["FILE_PDF"]; ?>" class="download-presentation-btn quaternary-btn hidden-mobile" target="_blank">
						<span class="download-presentation-btn__text quaternary-btn__text">Скачать презентацию</span>
						<img src="<?=SITE_TEMPLATE_PATH?>/images/arrow-right-white.png" class="download-presentation-btn__image quaternary-btn__image" alt="">
					</a>
				<?php } ?>
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
	</div>

	<?php if($status != "Продажи завершены") { ?>
		<div class="dark-frame-section section">
			<div class="container">
			<div class="dark-frame">
				<div class="dark-frame__title primary-title">Осталось всего 3 квартиры, успейте реализовать свою мечту!</div>
				<div class="dark-frame__text">в продаже 3 квартиры одинаковой планировки, площадью 68,89, стоимость 8,9 млн</div>
				<a href="#" class="dark-frame-btn tertiary-btn">
				<span class="tertiary-btn__text">Смотреть квартиры</span>
				<img src="<?=SITE_TEMPLATE_PATH?>/images/arrow-right-blue.svg" class="tertiary-btn__image" alt="">
				</a>
			</div>
			</div>
		</div>
	<?php } ?>

	<div class="location-section section">
		<div class="container">
			<?php if($arResult['PROPERTIES']['DESCRIPTION_TITLE']['VALUE']) { ?>
				<div class="location-section-title primary-title"><?php echo $arResult['PROPERTIES']['DESCRIPTION_TITLE']['VALUE']; ?></div>
			<?php } ?>
			<div class="paragraph-left-right paragraph-right"><?php echo $arResult['DETAIL_TEXT']; ?></div>
			<div class="location-content">

				<?php
				$arFilter = Array("IBLOCK_ID" => 8, "SECTION_ID" => $advantages);
				$res1 = CIBlockElement::GetList(array(), $arFilter, false, Array("nPageSize"=>20));

				$i = 1;
				while($ob1 = $res1->GetNextElement()) {
					$arFields1 = $ob1->GetFields(); ?>

					<div class="location-content-item <?= $i == 1 ? 'active' : '' ?>">
						<div class="description">
							<div class="decription-title">
							<span class="decription-title__number primary-title"><?php echo $i; ?></span>
							<span class="decription-title__text"><?php echo $arFields1["NAME"]; ?></span>
							</div>
							<div class="description-text"><?php echo $arFields1["DETAIL_TEXT"]; ?></div>
						</div>
						<div class="location-image">
							<?php
							$detail_picture_id = $arFields1["DETAIL_PICTURE"];
							$detail_picture_src = CFile::GetPath($detail_picture_id);

							if ($detail_picture_src) { ?>
								<img src="<?php echo $detail_picture_src; ?>" alt="">
							<?php } else { ?> 
								<img src="<?=SITE_TEMPLATE_PATH?>/images/no-photo.jpg" alt="">
							<?php } ?>
						</div>
					</div>
					<?php
					$i++;
				} ?>

				<a href="#" class="map-btn quaternary-btn hidden-mobile">
				<span class="quaternary-btn__text">Смотреть на карте</span>
				<img src="<?=SITE_TEMPLATE_PATH?>/images/arrow-right-white.png" class="quaternary-btn__image" alt="">
				</a>
			</div>

			<div class="location-advantages-slider-wrapper">
				<div class="swiper-nav">
				<div class="swiper-prev">
					<span></span>
				</div>
				<div class="swiper-next">
					<span></span>
				</div>
				</div>
				<div class="location-advantages-slider swiper">
					<div class="swiper-wrapper">
						<?php
						$res2 = CIBlockElement::GetList(array(), $arFilter, false, Array("nPageSize"=>20));
						while($ob2 = $res2->GetNextElement()) {
							$arFields2 = $ob2->GetFields();	
							$detail_picture_id = $arFields2["DETAIL_PICTURE"];
							$detail_picture_src = CFile::GetPath($detail_picture_id);
							?>
							<div class="location-advantages-slider-item swiper-slide">
								<div class="location-advantages-slider-item__content">
									<div class="location-advantages-slider-item__title"><?php echo $arFields2["NAME"]; ?></div>
									<div class="location-advantages-slider-item__description"><?php echo strip_tags($arFields2["DETAIL_TEXT"]); ?></div>
								</div>
								<div class="location-advantages-slider-item__image">
									<?php if ($detail_picture_src) { ?>
										<img src="<?php echo $detail_picture_src; ?>" alt="">
									<?php } else { ?> 
										<img src="<?=SITE_TEMPLATE_PATH?>/images/no-photo.jpg" alt="">
									<?php } ?>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>

			<a href="#" class="quaternary-btn map-mobile-btn">
				<span class="quaternary-btn__text">Смотреть на карте</span>
				<img src="<?=SITE_TEMPLATE_PATH?>/images/arrow-right-white.png" class="quaternary-btn__image" alt="">
			</a>

		</div>
	</div>

	<?php if($status != "Продажи завершены") { ?>
		<div id="booking-online-form-wrapper" class="booking-online-form-wrapper <?= $working_progress ? '' : 'section' ?>">
			<div class="container">
			<div class="form-wrapper">
				<div class="form-title primary-title">Узнать подробнее</div>
				<div class="form-text">оставьте заявку и наш менеджер с вами свяжется в ближайшее время</div>
				<form id="booking-online-form" class="form">
				<div class="flex-container">
					<div class="form-group">
					<label for="name" class="label">Имя*</label>
					<input type="text" name="name" id="name" class="input-field" autocomplete="on" placeholder="Введите имя">
					</div>
					<div class="form-group">
					<label for="email" class="label">Email*</label>
					<input type="email" name="email" id="email" class="input-field" autocomplete="on" placeholder="pochta@mail.ru">
					</div>
					<div class="form-group">
					<label for="phone" class="label">Телефон*</label>
					<input type="text" name="phone" id="phone" class="input-field js-input-phone-mask" autocomplete="on" placeholder="+7 (999) 999 99 99">
					</div>
					<button id="callback-submit-btn3" class="submit-btn primary-btn">
					<span class="primary-btn__text">Отправить заявку</span>
					</button>
				</div>
				<div class="checkboxes-flex-container">
					<div class="agreement-text">
					<input type="checkbox" name="checkbox-read" class="custom-checkbox js-required-checkbox" id="checkbox-read-callback3" required onchange="document.getElementById('callback-submit-btn3').disabled = !this.checked;">
					<label for="checkbox-read-callback3" class="custom-checkbox-label"></label>
					<span class="checkbox-text">Ознакомлен (-на) с <a href="/privacy-policy.html" class="privacy-policy-link" target="_blank">политикой конфиденциальности</a></span>
					</div>
					<div class="agreement-text">
					<input type="checkbox" name="checkbox-agree" class="custom-checkbox js-required-checkbox" id="checkbox-agree-callback3" required onchange="document.getElementById('callback-submit-btn3').disabled = !this.checked;">
					<label for="checkbox-agree-callback3" class="custom-checkbox-label"></label>
					<span class="checkbox-text">Я согласен (-на) на <a href="/soglasie-posetitelya-sajta-na-obrabotku-personalnyh-dannyh.html" class="agreement-link" target="_blank">обработку персональных данных</a></span>
					</div>
				</div>
				</form>
			</div>
			</div>
		</div>
	<?php } ?>

	<?php if($working_progress) {
		$arOrder = Array("ID" => "DESC");
		$arSelectedFields = Array("ID","IBLOCK_ID", "NAME", "PROPERTY_*", );
		$arFilter = Array("IBLOCK_ID"=>7, "SECTION_ID" => $working_progress);
		$res = CIBlockElement::GetList($arOrder, $arFilter, false, Array("nPageSize"=>3), $arSelectedFields); ?>
		
		<div class="working-progress-section section">
			<div class="container">
			<div class="section-title primary-title">Ход строительства</div>
				<div class="grid-container">
					<?php while($ob = $res->GetNextElement()) {
						$arFields = $ob->GetFields();
						$arProps = $ob->GetProperties(); ?>

						<div class="working-progress-item">
							<div class="working-progress-gallery">

								<?php foreach($arProps["MORE_PHOTO"]["VALUE"] as $FILE) {   
									$src = CFile::GetPath($FILE); ?>

									<figure class="working-progress-gallery-item">
										<a href="<?php echo $src; ?>" data-pswp-width="600" data-pswp-height="900" target="_blank">
											<img src="<?php echo $src; ?>" alt="">
										</a>
									</figure>

								<?php } ?>								

							</div>
							<div class="working-progress-item__date"><?php echo $arFields["NAME"]; ?></div>
							<div class="working-progress-item__arrow blur-arrow-right">
								<img src="<?=SITE_TEMPLATE_PATH?>/images/advantages-arrow-right.png" alt="">
							</div>
						</div>

					<?php }  ?>
				</div>
			</div>
		</div>

	<?php } ?>

	<div class="testimonials-section section">
		<div class="container">
			<div class="section-title-wrapper">
				<div class="section-title primary-title">Отзывы</div>
				<div class="swiper-nav">
					<div class="swiper-prev">
						<span></span>
					</div>
					<div class="swiper-next">
						<span></span>
					</div>
				</div>
			</div>

			<div class="grid-container hidden-mobile">
				<div class="testimonials-item">
				  <div class="flex-container">
					<div class="testimonials-item__letter">М</div>
					<div class="testimonials-item__name">Морозов Алексей</div>
				  </div>
				  <div class="testimonials-item__text">Сервис понравился. Сервис компании АЛЕАН понравился. Изначально выбрали другой отель, но потом выбор пал на другой отель, компания сделала нам возврат денежных средств в полном объеме. За что огромное спасибо. Сервис понравился. Сервис понравился.</div>
				</div>
				<div class="testimonials-item">
				  <div class="flex-container">
					<div class="testimonials-item__letter">М</div>
					<div class="testimonials-item__name">Иванов Иван</div>
				  </div>
				  <div class="testimonials-item__text">Отдыхали в этом доме с 01.07.23 по 12.07.23 с дочерью и подругой с детьми. Нам всё очень понравилось, нас встретили в аэропорту и привезли, очень удобно. Дети были в восторге от бассейна. Нам очень понравилась домашняя кухня, которая находится прямо в этом доме, цены бюджетные, блюда разнообразные. Обязательно вернёмся туда ещё раз.. жных средств в полном объеме. За что огромное спасибо. Сервис понравился. Сервис понравился.</div>
				</div>
				<div class="testimonials-item">
				  <div class="flex-container">
					<div class="testimonials-item__letter">М</div>
					<div class="testimonials-item__name">Морозов Алексей</div>
				  </div>
				  <div class="testimonials-item__text">Были в гостевом доме так сказать проездом на 4 дня. Очень хорошие, радушные хозяива,в номерах всё чистенько. Хочу отметить столовую очень вкусно готовят. Спасибо вам большое!!</div>
				</div>
			</div>
			
			<div class="testimonials-buttons">
				<a href="/testimonials" class="view-all-testimonials-btn tertiary-btn">
					<span class="tertiary-btn__text">Смотреть все отзывы</span>
					<img src="<?=SITE_TEMPLATE_PATH?>/images/arrow-right-blue.svg" class="tertiary-btn__image" alt="">
				</a>
				<a href="/testimonials#add-testimonials" class="add-testimonials-btn quaternary-btn">
					<span class="quaternary-btn__text">Написать отзыв</span>
				</a>
			</div>
		</div>
	</div>

	<?php if($status != "Продажи завершены") { ?>
		<div class="office-map-section">
			<div class="container">
			<div class="office-map-wrapper">
				<div class="office-map">
					<img src="<?=SITE_TEMPLATE_PATH?>/images/temp-office-map.jpg" alt="">
				</div>
				<div class="address-card">
				<div class="address-card__image">
					<img src="<?php echo $arResult["DETAIL_PICTURE"]["SRC"]; ?>" alt="">
				</div>
				<div class="address-card__content">
					<div class="address-card__title">Офис продаж</div>
					<div class="address-card__name"><?=$arResult["NAME"]?></div>
					<div class="address-item">
					<div class="address-item__image">
						<img src="<?=SITE_TEMPLATE_PATH?>/images/geolocation.svg" alt="">
					</div>
					<div class="address-item__text">г. Челябинск, ул. Каслинская,д. 10, офис 123</div>
					</div>
					<div class="address-item">
					<div class="address-item__image">
						<img src="<?=SITE_TEMPLATE_PATH?>/images/clock.svg" alt="">
					</div>
					<div class="address-item__text">Ежедневно с 09:00 до 20:00</div>
					</div>
					<div class="address-item">
					<div class="address-item__image">
						<img src="<?=SITE_TEMPLATE_PATH?>/images/phone.svg" alt="">
					</div>
					<div class="address-item__text">+7 (999) 999 99 99</div>
					</div>
					<a href="/driving-map.html" class="driving-map-btn tertiary-btn">
					<span class="driving-map-btn__text tertiary-btn__text">Схема проезда</span>
					<img src="<?=SITE_TEMPLATE_PATH?>/images/map-pin.svg" class="driving-map-btn__image" alt="">
					</a>
					<a href="/contacts.html#booking-online-form-wrapper" class="make-an-appointment-btn primary-btn">
					<span class="make-an-appointment-btn__text primary-btn__text">Записаться на встречу</span>
					</a>
				</div>
				</div>
			</div>
			</div>
		</div>
	<?php } ?>
</div>

<script type="module">
	import PhotoSwipeLightbox from '<?=SITE_TEMPLATE_PATH?>/js/photoswipe-lightbox.esm.min.js';
	// Photoswipe
	const lightbox = new PhotoSwipeLightbox({
		gallery: '.working-progress-gallery',
		children: 'a',
		pswpModule: () => import('<?=SITE_TEMPLATE_PATH?>/js/photoswipe.esm.js'),
		loop: true
	});
	lightbox.init();
</script>