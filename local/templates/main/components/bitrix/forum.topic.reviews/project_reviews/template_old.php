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
<div class="container">
	<div id="<?=$arParams["FORM_ID"]?>container">
		<div data-bx-role="navigation-container-top">
			<?php
			if ($arResult["NAV_RESULT"]->NavPageCount > 1)
			{
				?><div data-bx-role="navigation-top" class="reviews-navigation-box reviews-navigation-top">
					<div class="reviews-page-navigation"><?=$arResult["NAV_STRING"]?></div>
					<div class="reviews-clear-float"></div>
				</div><?php
			}
			?>
		</div>

		<div class="reviews-block-container reviews-reviews-block-container">
			<div class="reviews-block-outer" data-bx-role="messages-container">
				<div class="reviews-block-inner" data-bx-role="messages">
					<?php
					$iCount = 0;
					foreach ($arResult["MESSAGES"] as $res)
					{
						$iCount++;
						?><table class="reviews-post-table <?=($iCount == 1 ? "reviews-post-first " : "")
							?><?=($iCount == count($arResult["MESSAGES"]) ? "reviews-post-last " : "")
							?><?=($iCount%2 == 1 ? "reviews-post-odd " : "reviews-post-even ")
							?><?=(($res["APPROVED"] == 'Y') ? "" : "reviews-post-hidden")
							?>" data-bx-message-id="<?=$res["ID"]
							?>" data-bx-author-id="<?=$res["AUTHOR_ID"]
							?>" data-bx-author-name="<?=$res["AUTHOR_NAME"]?>" id="message<?=$res["ID"]?>">
						<thead>
							<tr>
								<td><?php
								if ($arParams["SHOW_AVATAR"] != "N")
								{
									?><div class="review-avatar"><?php
									if (is_array($res["AVATAR"]) && array_key_exists("HTML", $res["AVATAR"]))
									{
										?><?=$res["AVATAR"]["HTML"];
									}
									else
									{
										?><img src="/bitrix/components/bitrix/forum.topic.reviews/templates/.default/images/noavatar.gif" border="0" /><?php
									}
									?></div><?php
								}
								?>
								<div>
									<b>
										<?php echo $res["AUTHOR_NAME"]; ?>
									</b>
									<!-- <span class='message-post-date'><?// echo $res["POST_DATE"]?></span> -->
								</div>
							</td></tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<div data-bx-role="text" class="reviews-text" id="message_text_<?=$res["ID"]?>"><?=$res["POST_MESSAGE_TEXT"]?></div>
								</td>
							</tr>
							<tr class="reviews-actions"><td><?php
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
								}
							?></td></tr>
						</tbody>
						</table><?php
					}
					?>
				</div>
			</div>
		</div>

		<?php
		if ($arResult["NAV_RESULT"]->NavPageCount > 1) { ?>
			<div data-bx-role="navigation-bottom" class="reviews-navigation-box reviews-navigation-bottom">
				<div class="reviews-page-navigation"><?=$arResult["NAV_STRING"]?></div>
				<div class="reviews-clear-float"></div>
			</div><?php
		}
		?>
		</div>
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
				?><a href="javascript:void(0);" class="reviews-form-switcher" data-bx-role="add-new-message"><?=GetMessage("F_ADD_COMMENT")?></a><?
			}
			include(__DIR__."/form.php");
		}
		?>
	</div>
</div>