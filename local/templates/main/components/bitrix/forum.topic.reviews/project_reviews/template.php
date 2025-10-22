<?php

use \Bitrix\Main;

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @var CMain $APPLICATION
 * @var CUser $USER
 */
CUtil::InitJSCore(array('ajax', 'fx', 'viewer'));
// ************************* Input params***************************************************************
$arParams["FILES_COUNT"] = intval(intval($arParams["FILES_COUNT"]) > 0 ? $arParams["FILES_COUNT"] : 2);
$arParams["IMAGE_SIZE"] = (intval($arParams["IMAGE_SIZE"]) > 0 ? $arParams["IMAGE_SIZE"] : 100);
// *************************/Input params***************************************************************
?>

<div id="<?=$arParams["FORM_ID"]?>container">
	<div data-bx-role="navigation-container-top"><?php
if ($arResult["NAV_RESULT"]->NavPageCount > 1)
{
	?><div data-bx-role="navigation-top" class="reviews-navigation-box reviews-navigation-top">
		<div class="reviews-page-navigation"><?=$arResult["NAV_STRING"]?></div>
		<div class="reviews-clear-float"></div>
	</div><?php
}
?></div>

<div class="reviews-block-container reviews-reviews-block-container">
	<div class="reviews-block-outer" data-bx-role="messages-container">
		<div class="reviews-block-inner grid-container" data-bx-role="messages">
			<?php
			$iCount = 0;
			foreach ($arResult["MESSAGES"] as $res)
			{
				$iCount++;
				?>
				<div class="reviews-post-table testimonials-item <?=($iCount == 1 ? "reviews-post-first " : "")
					?><?=($iCount == count($arResult["MESSAGES"]) ? "reviews-post-last " : "")
					?><?=($iCount%2 == 1 ? "reviews-post-odd " : "reviews-post-even ")
					?><?=(($res["APPROVED"] == 'Y') ? "" : "reviews-post-hidden")
					?>" data-bx-message-id="<?=$res["ID"]
					?>" data-bx-author-id="<?=$res["AUTHOR_ID"]
					?>" data-bx-author-name="<?=$res["AUTHOR_NAME"]?>" id="message<?=$res["ID"]?>">
					<div class="flex-container">
						<div class="testimonials-item__letter"><?php echo substr($res["AUTHOR_NAME"], 0, 1); ?></div>
						<div class="testimonials-item__name"><?=$res["AUTHOR_NAME"]?></div>
					</div>
					<div data-bx-role="text" class="reviews-text" id="message_text_<?=$res["ID"]?>"><?=$res["POST_MESSAGE_TEXT"]?></div>

					<div class="reviews-actions">
						<?php
						if ($arResult["SHOW_POST_FORM"] == "Y")
						{
							?><div class="reviews-post-reply-buttons"><noindex>
									<?php
									if ($arResult["PANELS"]["MODERATE"] == "Y")
									{
										?><a rel="nofollow" href="#message<?=$res["ID"]?>" class="reviews-button-small" data-bx-act="<?=($res["APPROVED"] === "Y" ? "hide" : "show")?>">
											<span data-bx-description="hide"><?=GetMessage("F_HIDE")?></span>
											<span data-bx-description="show"><?=GetMessage("F_SHOW")?></span>
										</a><?php
									}
									if ($arResult["PANELS"]["DELETE"] == "Y")
									{
										?><a rel="nofollow" href="<?=htmlspecialcharsbx($res["URL"]["~DELETE"])?>" class="reviews-button-small" data-bx-act="del"><?=GetMessage("F_DELETE")?></a><?php
									}
							?></noindex></div><?php
						}?>
					</div>

				</div>
			<?php
			}
			?>
		</div>
	</div>
</div>
<div data-bx-role="navigation-container-bottom"><?php
	if ($arResult["NAV_RESULT"]->NavPageCount > 1)
	{
		?><div data-bx-role="navigation-bottom" class="reviews-navigation-box reviews-navigation-bottom">
			<div class="reviews-page-navigation"><?=$arResult["NAV_STRING"]?></div>
			<div class="reviews-clear-float"></div>
		</div><?php
	}
?></div>
<script>
	BX.ready(function(){
		BX.message(<?=CUtil::phpToJsObject(Main\Localization\Loc::loadLanguageFile(__FILE__))?>);
		new BX.Forum.Reviews.Entity({
			formId: '<?=$arParams["FORM_ID"]?>',
			container: BX('<?=$arParams["FORM_ID"]?>container'),
			ajaxPost :  <?=($arParams["AJAX_POST"] === 'Y' ? 'true' : 'false')?>
		});

		BX.viewElementBind(BX('<?=$arParams["FORM_ID"]?>container'), {},
			function(node){
				return BX.type.isElementNode(node) && (node.getAttribute('data-bx-viewer') || node.getAttribute('data-bx-image'));
			}
		);
	});
</script>
<?php
if ($arResult["SHOW_POST_FORM"] === "Y")
{
	if (empty($arResult["ERROR_MESSAGE"]))
	{
		?>

		<div id="add-testimonials" class="testimonials-buttons js-testimonial-btn">
			<a href="javascript:void(0);" class="add-testimonials-btn quaternary-btn" data-bx-role="add-new-message">
			  <span class="quaternary-btn__text">Написать отзыв</span>
			</a>
		</div>
	<?
	}
	include(__DIR__."/form.php");
}
?>
</div>