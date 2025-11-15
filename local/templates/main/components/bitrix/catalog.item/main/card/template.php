<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $item
 * @var array $actualItem
 * @var array $minOffer
 * @var array $itemIds
 * @var array|null $price
 * @var float|int|null $measureRatio
 * @var bool $haveOffers
 * @var bool $showSubscribe
 * @var bool $itemHasDetailUrl
 * @var string $imgTitle
 * @var string $productTitle
 * @var string $buttonSizeClass
 * @var string $discountPositionClass
 * @var string $labelPositionClass
 * @var CatalogSectionComponent $component
 */

$picture = CFile::ResizeImageGet(
    $item['PREVIEW_PICTURE']['ID'],
    ['width'=>250, 'height'=>250],
    BX_RESIZE_IMAGE_PROPORTIONAL,
    true
);

?>


<div class="product-card">
    <div class="product-card-offer">
        <div class="offer-hit" id="<?=$itemIds['DSC_PERC']?>" <?=($price['PERCENT'] > 0 ? '' : 'style="display: none;"')?>><?=-$price['PERCENT']?>%</div>
        <div class="offer-new">New</div>
    </div>
    <div class="product-thumb">
        <a href="<?= $item['DETAIL_PAGE_URL'] ?>"><img src="<?= $picture['src'] ?>" id="<?=$itemIds['PICT']?> alt=""></a>
    </div>
    <div class="product-details">
        <h4>
            <a href="<?= $item['DETAIL_PAGE_URL'] ?>"><?= $productTitle ?></a>
        </h4>
        <div class="product-excerpt product-item-info-container product-item-hidden" data-entity="props-block">
            <dl class="product-item-properties">
                <?
                foreach ($item['DISPLAY_PROPERTIES'] as $code => $displayProperty)
                {
                    ?>
                    <dt class="text-muted<?=(!isset($item['PROPERTY_CODE_MOBILE'][$code]) ? ' d-none d-sm-block' : '')?>">
                        <?=$displayProperty['NAME']?>
                    </dt>
					<dd class="text-dark<?=(!isset($item['PROPERTY_CODE_MOBILE'][$code]) ? ' d-none d-sm-block' : '')?>">
						<?=(is_array($displayProperty['DISPLAY_VALUE'])
								? implode(' / ', $displayProperty['DISPLAY_VALUE'])
								: $displayProperty['DISPLAY_VALUE'])?>
					</dd>
                    <?
                }
                ?>
            </dl>
        </div>
        <div class="product-bottom-details d-flex justify-content-between">
			<?php
			if ($arParams['SHOW_OLD_PRICE'] === 'Y' && !empty($price))
			{
				?>
				<span class="product-item-price-old" id="<?=$itemIds['PRICE_OLD']?>"
					<?=($price['RATIO_PRICE'] >= $price['RATIO_BASE_PRICE'] ? 'style="display: none;"' : '')?>>
					<?=$price['PRINT_RATIO_BASE_PRICE']?>
				</span>&nbsp;
				<?
			}
			?>
            <div class="product-price product-item-price-current" id="<?=$itemIds['PRICE']?>">
                <?
                if (!empty($price))
                {
                    if ($arParams['PRODUCT_DISPLAY_MODE'] === 'N' && $haveOffers)
                    {
                        echo Loc::getMessage(
                            'CT_BCI_TPL_MESS_PRICE_SIMPLE_MODE',
                            array(
                                '#PRICE#' => $price['PRINT_RATIO_PRICE'],
                                '#VALUE#' => $measureRatio,
                                '#UNIT#' => $minOffer['ITEM_MEASURE']['TITLE']
                            )
                        );
                    }
                    else
                    {
                        echo $price['PRINT_RATIO_PRICE'];
                    }
                }
                ?>
            </div>
            <div class="product-links" data-entity="buttons-block">
				<?php
				if (!$haveOffers)
				{
					if ($actualItem['CAN_BUY'])
					{
						?>
						<div id="<?=$itemIds['BASKET_ACTIONS']?>">
							<button class="btn btn-outline-secondary add-to-cart" id="<?=$itemIds['BUY_LINK']?>" href="javascript:void(0)" rel="nofollow">
								<i class="fas fa-shopping-cart"></i>
							</button>
						</div>
						<?
					}
					else
					{
						?>
						<button class="btn btn-link"
								id="<?=$itemIds['NOT_AVAILABLE_MESS']?>" href="javascript:void(0)" rel="nofollow">
							<?=$arParams['MESS_NOT_AVAILABLE']?>
						</button>
						<?php
					}
				}
				else
				{
					?>
					<button class="btn btn-link"
							id="<?=$itemIds['NOT_AVAILABLE_MESS']?>" href="javascript:void(0)" rel="nofollow"
						<?=($actualItem['CAN_BUY'] ? 'style="display: none;"' : '')?>>
						<?=$arParams['MESS_NOT_AVAILABLE']?>
					</button>
					<div id="<?=$itemIds['BASKET_ACTIONS']?>" <?=($actualItem['CAN_BUY'] ? '' : 'style="display: none;"')?>>
						<button class="btn btn-outline-secondary add-to-cart" id="<?=$itemIds['BUY_LINK']?>" href="javascript:void(0)" rel="nofollow">
							<i class="fas fa-shopping-cart"></i>
						</button>
					</div>
					<?php
				}
				?>

            </div>
        </div>
    </div>
</div>

<?php

?>

<div style="display: none">
	<span class="product-item-image-slider-slide-container slide" id="<?=$itemIds['PICT_SLIDER']?>"
			<?=($showSlider ? '' : 'style="display: none;"')?>
			data-slider-interval="<?=$arParams['SLIDER_INTERVAL']?>" data-slider-wrap="true">

		</span>
	<span class="product-item-image-original" id="<?=$itemIds['PICT']?>" style="background-image: url('<?=$item['PREVIEW_PICTURE']['SRC']?>'); <?=($showSlider ? 'display: none;' : '')?>"></span>
</div>

<div class="product-item">

		<?

	if (!empty($arParams['PRODUCT_BLOCKS_ORDER']))
	{
		foreach ($arParams['PRODUCT_BLOCKS_ORDER'] as $blockName)
		{
			switch ($blockName)
			{
				case 'sku':
					if ($arParams['PRODUCT_DISPLAY_MODE'] === 'Y' && $haveOffers && !empty($item['OFFERS_PROP']))
					{
						?>
						<div class="product-item-info-container product-item-hidden" id="<?=$itemIds['PROP_DIV']?>">
							<?
							foreach ($arParams['SKU_PROPS'] as $skuProperty)
							{
								$propertyId = $skuProperty['ID'];
								$skuProperty['NAME'] = htmlspecialcharsbx($skuProperty['NAME']);
								if (!isset($item['SKU_TREE_VALUES'][$propertyId]))
									continue;
								?>
								<div data-entity="sku-block">
									<div class="product-item-scu-container" data-entity="sku-line-block">
										<div class="product-item-scu-block-title text-muted"><?=$skuProperty['NAME']?></div>
										<div class="product-item-scu-block">
											<div class="product-item-scu-list">
												<ul class="product-item-scu-item-list">
													<?
													foreach ($skuProperty['VALUES'] as $value)
													{
														if (!isset($item['SKU_TREE_VALUES'][$propertyId][$value['ID']]))
															continue;

														$value['NAME'] = htmlspecialcharsbx($value['NAME']);

														if ($skuProperty['SHOW_MODE'] === 'PICT')
														{
															?>
															<li class="product-item-scu-item-color-container" title="<?=$value['NAME']?>" data-treevalue="<?=$propertyId?>_<?=$value['ID']?>" data-onevalue="<?=$value['ID']?>">
																<div class="product-item-scu-item-color-block">
																	<div class="product-item-scu-item-color" title="<?=$value['NAME']?>" style="background-image: url('<?=$value['PICT']['SRC']?>');"></div>
																</div>
															</li>
															<?
														}
														else
														{
															?>
															<li class="product-item-scu-item-text-container" title="<?=$value['NAME']?>"
																data-treevalue="<?=$propertyId?>_<?=$value['ID']?>" data-onevalue="<?=$value['ID']?>">
																<div class="product-item-scu-item-text-block">
																	<div class="product-item-scu-item-text"><?=$value['NAME']?></div>
																</div>
															</li>
															<?
														}
													}
													?>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<?
							}
							?>
						</div>
						<?
						foreach ($arParams['SKU_PROPS'] as $skuProperty)
						{
							if (!isset($item['OFFERS_PROP'][$skuProperty['CODE']]))
								continue;

							$skuProps[] = array(
								'ID' => $skuProperty['ID'],
								'SHOW_MODE' => $skuProperty['SHOW_MODE'],
								'VALUES' => $skuProperty['VALUES'],
								'VALUES_COUNT' => $skuProperty['VALUES_COUNT']
							);
						}

						unset($skuProperty, $value);

						if ($item['OFFERS_PROPS_DISPLAY'])
						{
							foreach ($item['JS_OFFERS'] as $keyOffer => $jsOffer)
							{
								$strProps = '';

								if (!empty($jsOffer['DISPLAY_PROPERTIES']))
								{
									foreach ($jsOffer['DISPLAY_PROPERTIES'] as $displayProperty)
									{
										$strProps .= '<dt>'.$displayProperty['NAME'].'</dt><dd>'
											.(is_array($displayProperty['VALUE'])
												? implode(' / ', $displayProperty['VALUE'])
												: $displayProperty['VALUE'])
											.'</dd>';
									}
								}

								$item['JS_OFFERS'][$keyOffer]['DISPLAY_PROPERTIES'] = $strProps;
							}
							unset($jsOffer, $strProps);
						}
					}

					break;
			}
		}
	}
	?>
</div>