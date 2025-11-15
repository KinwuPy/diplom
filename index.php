<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-магазин \"Одежда\"");
?>
<?if (IsModuleInstalled("advertising")):?>
	<div class="mb-5">
		<?$APPLICATION->IncludeComponent(
			"bitrix:advertising.banner",
			"bootstrap_v4",
			array(
				"COMPONENT_TEMPLATE" => "bootstrap_v4",
				"TYPE" => "MAIN",
				"NOINDEX" => "Y",
				"QUANTITY" => "3",
				"BS_EFFECT" => "fade",
				"BS_CYCLING" => "N",
				"BS_WRAP" => "Y",
				"BS_PAUSE" => "Y",
				"BS_KEYBOARD" => "Y",
				"BS_ARROW_NAV" => "Y",
				"BS_BULLET_NAV" => "Y",
				"BS_HIDE_FOR_TABLETS" => "N",
				"BS_HIDE_FOR_PHONES" => "Y",
				"CACHE_TYPE" => "A",
				"CACHE_TIME" => "36000000",
			),
			false
		);?>
	</div>
<?endif?>

<?
global $trendFilter;
$trendFilter = array('PROPERTY_TREND' => '4');
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section",
	"home",
	array(
		"IBLOCK_TYPE_ID" => "catalog",
		"IBLOCK_ID" => "2",
		"BASKET_URL" => "/personal/cart/",
		"COMPONENT_TEMPLATE" => "home",
		"IBLOCK_TYPE" => "catalog",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_CODE" => "",
		"SECTION_USER_FIELDS" => [],
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "desc",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_NAME" => "trendFilter",
		"INCLUDE_SUBSECTIONS" => "Y",
		"SHOW_ALL_WO_SECTION" => "Y",
		"HIDE_NOT_AVAILABLE" => "N",
		"PAGE_ELEMENT_COUNT" => "8",
		"LINE_ELEMENT_COUNT" => "3",
		"PROPERTY_CODE" => array(
			0 => "NEWPRODUCT",
			1 => "",
		),
		"OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_PROPERTY_CODE" => array(
			0 => "COLOR_REF",
			1 => "SIZES_SHOES",
			2 => "SIZES_CLOTHES",
			3 => "",
		),
		"PROPERTY_CODE_MOBILE" => array(
			0 => "ARTNUMBER",
			1 => "MANUFACTURER",
			2 => "MATERIAL",
		),
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_ORDER" => "desc",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER2" => "desc",
		"TEMPLATE_THEME" => "site",
		"PRODUCT_DISPLAY_MODE" => "Y",
		"ADD_PICT_PROP" => "MORE_PHOTO",
		"LABEL_PROP" => array(
			0 => "NEWPRODUCT"
		),
		"OFFER_ADD_PICT_PROP" => "-",
		"OFFER_TREE_PROPS" => array(
			0 => "COLOR_REF",
			1 => "SIZES_SHOES",
			2 => "SIZES_CLOTHES",
		),
		"PRODUCT_SUBSCRIPTION" => "Y",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_OLD_PRICE" => "Y",
		"SHOW_CLOSE_POPUP" => "N",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"SECTION_URL" => "",
		"DETAIL_URL" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SEF_MODE" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"SET_TITLE" => "Y",
		"SET_BROWSER_TITLE" => "Y",
		"BROWSER_TITLE" => "-",
		"SET_META_KEYWORDS" => "Y",
		"META_KEYWORDS" => "-",
		"SET_META_DESCRIPTION" => "Y",
		"META_DESCRIPTION" => "-",
		"SET_LAST_MODIFIED" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"CACHE_FILTER" => "N",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"CONVERT_CURRENCY" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"PRODUCT_QUANTITY_VARIABLE" => "",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRODUCT_PROPERTIES" => array(
		),
		"OFFERS_CART_PROPERTIES" => array(
			0 => "COLOR_REF",
			1 => "SIZES_SHOES",
			2 => "SIZES_CLOTHES",
		),
		"ADD_TO_BASKET_ACTION" => "ADD",
		"PAGER_TEMPLATE" => "round",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Товары",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"COMPATIBLE_MODE" => "N",
        "SHOW_SLIDER" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "CUSTOM_TITLE" => "Рекомендуемые товары",
	),
	false
);?>


    <div id="carousel" class="carousel slide carousel-fade">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="<?= SITE_TEMPLATE_PATH ?>/img/slider/1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>First slide label</h2>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div><!--1 slide-->

            <div class="carousel-item">
                <img src="<?= SITE_TEMPLATE_PATH ?>/img/slider/2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Second slide label</h2>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div><!--2 slide-->

            <div class="carousel-item">
                <img src="<?= SITE_TEMPLATE_PATH ?>/img/slider/3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Third slide label</h2>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div><!--3 slide-->

            <div class="carousel-item">
                <img src="<?= SITE_TEMPLATE_PATH ?>/img/slider/4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Fourth slide label</h2>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div><!--4 slide-->

            <div class="carousel-item">
                <img src="<?= SITE_TEMPLATE_PATH ?>/img/slider/5.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Fifth slide label</h2>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div><!--5 slide-->

        </div><!--Slides-->
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div><!--Slider-->

    <section class="advantages" id="advantages">
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-12">
                    <h2 class="section-title">
                        <span>Наши преимущества</span>
                    </h2>
                </div>
            </div>

            <div class="row gy-3 items">
                <div class="col-lg-3 col-sm-6">
                    <div class="item">
                        <p><i class="fas fa-shipping-fast"></i></p>
                        <p>Прямые поставки от производителей</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="item">
                        <p><i class="fas fa-cubes"></i></p>
                        <p>Широкий ассортимент товаров. Более 10 тыс. наименований</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="item">
                        <p><i class="fas fa-hand-holding-usd"></i></p>
                        <p>Приятные цены</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="item">
                        <p><i class="fa-solid fa-user-graduate"></i></p>
                        <p>Консультации от профессионалов</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!--advantages-->

    <section class="featured-products" id="featured">
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-12">
                    <h2 class="section-title">
                        <span>Рекомендуемые товары</span>
                    </h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                    <div class="product-card">
                        <div class="product-card-offer">
                            <div class="offer-hit">Hit</div>
                            <div class="offer-new">New</div>
                        </div>
                        <div class="product-thumb">
                            <a href="product.html"><img src="<?= SITE_TEMPLATE_PATH ?>/img/products/astrohim.jpg" alt=""></a>
                        </div>
                        <div class="product-details">
                            <h4>
                                <a href="product.html">Astrohim Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus, voluptatem. Illum, vero.</a>
                            </h4>
                            <p class="product-excerpt">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure velit aspernatur voluptatem esse ex eaque totam ab, ducimus sed vero.</p>
                            <div class="product-bottom-details d-flex justify-content-between">
                                <div class="product-price">
                                    <small>500р</small>
                                    650р
                                </div>
                                <div class="product-links">
                                    <a href="#"class="btn btn-outline-secondary add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--1 Product-->

                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                    <div class="product-card">
                        <div class="product-card-offer">
                            <div class="offer-hit">Hit</div>
                            <!--<div class="offer-new">New</div>-->
                        </div>
                        <div class="product-thumb">
                            <a href="product.html"><img src="<?= SITE_TEMPLATE_PATH ?>/img/products/belt.jpg" alt=""></a>
                        </div>
                        <div class="product-details">
                            <h4>
                                <a href="product.html">Belt</a>
                            </h4>
                            <p class="product-excerpt">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                            <div class="product-bottom-details d-flex justify-content-between">
                                <div class="product-price">
                                    <small>500р</small>
                                    650р
                                </div>
                                <div class="product-links">
                                    <a href="#"class="btn btn-outline-secondary add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--2 Product-->

                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                    <div class="product-card">
                        <div class="product-card-offer">
                            <!--<div class="offer-hit">Hit</div>
                            <div class="offer-new">New</div>-->
                        </div>
                        <div class="product-thumb">
                            <a href="product.html"><img src="<?= SITE_TEMPLATE_PATH ?>/img/products/chain.jpg" alt=""></a>
                        </div>
                        <div class="product-details">
                            <h4>
                                <a href="product.html">Chain Lorem ipsum.</a>
                            </h4>
                            <p class="product-excerpt">Lorem ipsum</p>
                            <div class="product-bottom-details d-flex justify-content-between">
                                <div class="product-price">
                                    <small>100р</small>
                                    50р
                                </div>
                                <div class="product-links">
                                    <a href="#"class="btn btn-outline-secondary add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--3 Product-->

                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                    <div class="product-card">
                        <div class="product-card-offer">
                            <!-- <div class="offer-hit">Hit</div> -->
                            <div class="offer-new">New</div>
                        </div>
                        <div class="product-thumb">
                            <a href="product.html"><img src="<?= SITE_TEMPLATE_PATH ?>/img/products/oil_1l.jpg" alt=""></a>
                        </div>
                        <div class="product-details">
                            <h4>
                                <a href="product.html">Spectrol 1l</a>
                            </h4>
                            <p class="product-excerpt">Lorem ipsum dolor</p>
                            <div class="product-bottom-details d-flex justify-content-between">
                                <div class="product-price">
                                    <small>500р</small>
                                    650р
                                </div>
                                <div class="product-links">
                                    <a href="#"class="btn btn-outline-secondary add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--4 Product-->

                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                    <div class="product-card">
                        <div class="product-card-offer">
                            <div class="offer-hit">Hit</div>
                            <div class="offer-new">New</div>
                        </div>
                        <div class="product-thumb">
                            <a href="product.html"><img src="<?= SITE_TEMPLATE_PATH ?>/img/products/oil_4l.jpg" alt=""></a>
                        </div>
                        <div class="product-details">
                            <h4>
                                <a href="product.html">Spectrol 4l Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus, voluptatem. Illum, vero.</a>
                            </h4>
                            <p class="product-excerpt">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure velit aspernatur voluptatem esse ex eaque totam ab, ducimus sed vero.</p>
                            <div class="product-bottom-details d-flex justify-content-between">
                                <div class="product-price">
                                    <small>500р</small>
                                    650р
                                </div>
                                <div class="product-links">
                                    <a href="#"class="btn btn-outline-secondary add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--5 Product-->

                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                    <div class="product-card">
                        <div class="product-card-offer">
                            <div class="offer-hit">Hit</div>
                            <div class="offer-new">New</div>
                        </div>
                        <div class="product-thumb">
                            <a href="product.html"><img src="<?= SITE_TEMPLATE_PATH ?>/img/products/paint.jpeg" alt=""></a>
                        </div>
                        <div class="product-details">
                            <h4>
                                <a href="product.html">Kudo Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus, voluptatem. Illum, vero.</a>
                            </h4>
                            <p class="product-excerpt"></p>
                            <div class="product-bottom-details d-flex justify-content-between">
                                <div class="product-price">
                                    <small>500р</small>
                                    650р
                                </div>
                                <div class="product-links">
                                    <a href="#"class="btn btn-outline-secondary add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--6 Product-->

                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                    <div class="product-card">
                        <div class="product-card-offer">
                            <div class="offer-hit">Hit</div>
                            <div class="offer-new">New</div>
                        </div>
                        <div class="product-thumb">
                            <a href="product.html"><img src="<?= SITE_TEMPLATE_PATH ?>/img/products/spark_plug.jpg" alt=""></a>
                        </div>
                        <div class="product-details">
                            <h4>
                                <a href="product.html">Spark Plug Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus, voluptatem. Illum, vero.</a>
                            </h4>
                            <p class="product-excerpt">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure velit aspernatur voluptatem esse ex eaque totam ab, ducimus sed vero.</p>
                            <div class="product-bottom-details d-flex justify-content-between">
                                <div class="product-price">
                                    <small>500р</small>
                                    650р
                                </div>
                                <div class="product-links">
                                    <a href="#"class="btn btn-outline-secondary add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--7 Product-->

                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                    <div class="product-card">
                        <div class="product-card-offer">
                            <div class="offer-hit">Hit</div>
                            <div class="offer-new">New</div>
                        </div>
                        <div class="product-thumb">
                            <a href="product.html"><img src="<?= SITE_TEMPLATE_PATH ?>/img/products/tyre.jpg" alt=""></a>
                        </div>
                        <div class="product-details">
                            <h4>
                                <a href="product.html">Tyre Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus, voluptatem. Illum, vero.</a>
                            </h4>
                            <p class="product-excerpt">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure velit aspernatur voluptatem esse ex eaque totam ab, ducimus sed vero.</p>
                            <div class="product-bottom-details d-flex justify-content-between">
                                <div class="product-price">
                                    <small>500р</small>
                                    650р
                                </div>
                                <div class="product-links">
                                    <a href="#"class="btn btn-outline-secondary add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--8 Product-->
            </div>
        </div>
    </section>



    <section class="new-products" id="new-products">
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-12">
                    <h2 class="section-title">
                        <span>Новинки</span>
                    </h2>
                </div>
            </div>

            <div class="owl-carousel owl-theme owl-carousel-full">
                <div class="product-card">
                    <div class="product-card-offer">
                        <div class="offer-hit">Hit</div>
                        <div class="offer-new">New</div>
                    </div>
                    <div class="product-thumb">
                        <a href="product.html"><img src="<?= SITE_TEMPLATE_PATH ?>/img/products/astrohim.jpg" alt=""></a>
                    </div>
                    <div class="product-details">
                        <h4>
                            <a href="product.html">Astrohim Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus, voluptatem. Illum, vero.</a>
                        </h4>
                        <p class="product-excerpt">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure velit aspernatur voluptatem esse ex eaque totam ab, ducimus sed vero.</p>
                        <div class="product-bottom-details d-flex justify-content-between">
                            <div class="product-price">
                                <small>500р</small>
                                650р
                            </div>
                            <div class="product-links">
                                <a href="#"class="btn btn-outline-secondary add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-card-offer">
                        <div class="offer-hit">Hit</div>
                        <!--<div class="offer-new">New</div>-->
                    </div>
                    <div class="product-thumb">
                        <a href="product.html"><img src="<?= SITE_TEMPLATE_PATH ?>/img/products/belt.jpg" alt=""></a>
                    </div>
                    <div class="product-details">
                        <h4>
                            <a href="product.html">Belt</a>
                        </h4>
                        <p class="product-excerpt">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                        <div class="product-bottom-details d-flex justify-content-between">
                            <div class="product-price">
                                <small>500р</small>
                                650р
                            </div>
                            <div class="product-links">
                                <a href="#"class="btn btn-outline-secondary add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-card-offer">
                        <!--<div class="offer-hit">Hit</div>
                        <div class="offer-new">New</div>-->
                    </div>
                    <div class="product-thumb">
                        <a href="product.html"><img src="<?= SITE_TEMPLATE_PATH ?>/img/products/chain.jpg" alt=""></a>
                    </div>
                    <div class="product-details">
                        <h4>
                            <a href="product.html">Chain Lorem ipsum.</a>
                        </h4>
                        <p class="product-excerpt">Lorem ipsum</p>
                        <div class="product-bottom-details d-flex justify-content-between">
                            <div class="product-price">
                                <small>100р</small>
                                50р
                            </div>
                            <div class="product-links">
                                <a href="#"class="btn btn-outline-secondary add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-card-offer">
                        <!-- <div class="offer-hit">Hit</div> -->
                        <div class="offer-new">New</div>
                    </div>
                    <div class="product-thumb">
                        <a href="product.html"><img src="<?= SITE_TEMPLATE_PATH ?>/img/products/oil_1l.jpg" alt=""></a>
                    </div>
                    <div class="product-details">
                        <h4>
                            <a href="product.html">Spectrol 1l</a>
                        </h4>
                        <p class="product-excerpt">Lorem ipsum dolor</p>
                        <div class="product-bottom-details d-flex justify-content-between">
                            <div class="product-price">
                                <small>500р</small>
                                650р
                            </div>
                            <div class="product-links">
                                <a href="#"class="btn btn-outline-secondary add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-card-offer">
                        <div class="offer-hit">Hit</div>
                        <div class="offer-new">New</div>
                    </div>
                    <div class="product-thumb">
                        <a href="product.html"><img src="<?= SITE_TEMPLATE_PATH ?>/img/products/oil_4l.jpg" alt=""></a>
                    </div>
                    <div class="product-details">
                        <h4>
                            <a href="product.html">Spectrol 4l Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus, voluptatem. Illum, vero.</a>
                        </h4>
                        <p class="product-excerpt">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure velit aspernatur voluptatem esse ex eaque totam ab, ducimus sed vero.</p>
                        <div class="product-bottom-details d-flex justify-content-between">
                            <div class="product-price">
                                <small>500р</small>
                                650р
                            </div>
                            <div class="product-links">
                                <a href="#"class="btn btn-outline-secondary add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-card-offer">
                        <div class="offer-hit">Hit</div>
                        <div class="offer-new">New</div>
                    </div>
                    <div class="product-thumb">
                        <a href="product.html"><img src="<?= SITE_TEMPLATE_PATH ?>/img/products/paint.jpeg" alt=""></a>
                    </div>
                    <div class="product-details">
                        <h4>
                            <a href="product.html">Kudo Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus, voluptatem. Illum, vero.</a>
                        </h4>
                        <p class="product-excerpt"></p>
                        <div class="product-bottom-details d-flex justify-content-between">
                            <div class="product-price">
                                <small>500р</small>
                                650р
                            </div>
                            <div class="product-links">
                                <a href="#"class="btn btn-outline-secondary add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-card-offer">
                        <div class="offer-hit">Hit</div>
                        <div class="offer-new">New</div>
                    </div>
                    <div class="product-thumb">
                        <a href="product.html"><img src="<?= SITE_TEMPLATE_PATH ?>/img/products/spark_plug.jpg" alt=""></a>
                    </div>
                    <div class="product-details">
                        <h4>
                            <a href="product.html">Spark Plug Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus, voluptatem. Illum, vero.</a>
                        </h4>
                        <p class="product-excerpt">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure velit aspernatur voluptatem esse ex eaque totam ab, ducimus sed vero.</p>
                        <div class="product-bottom-details d-flex justify-content-between">
                            <div class="product-price">
                                <small>500р</small>
                                650р
                            </div>
                            <div class="product-links">
                                <a href="#"class="btn btn-outline-secondary add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-card-offer">
                        <div class="offer-hit">Hit</div>
                        <div class="offer-new">New</div>
                    </div>
                    <div class="product-thumb">
                        <a href="product.html"><img src="<?= SITE_TEMPLATE_PATH ?>/img/products/tyre.jpg" alt=""></a>
                    </div>
                    <div class="product-details">
                        <h4>
                            <a href="product.html">Tyre Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus, voluptatem. Illum, vero.</a>
                        </h4>
                        <p class="product-excerpt">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure velit aspernatur voluptatem esse ex eaque totam ab, ducimus sed vero.</p>
                        <div class="product-bottom-details d-flex justify-content-between">
                            <div class="product-price">
                                <small>500р</small>
                                650р
                            </div>
                            <div class="product-links">
                                <a href="#"class="btn btn-outline-secondary add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us" id="about">
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-12">
                    <h2 class="section-title">
                        <span>О нас</span>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias consequuntur voluptas dicta blanditiis ab fugit voluptate a eos iusto veniam dolorem cum sequi non inventore dignissimos, repudiandae accusantium placeat. Nostrum?</p>
                    <p>Facere, ea? Voluptas repellat delectus ipsam? Dolore quae aliquid cupiditate, nesciunt architecto odit natus fuga perspiciatis laboriosam facilis perferendis sint debitis distinctio tenetur obcaecati voluptate voluptas et eum sit facere.</p>
                    <p>Officiis laboriosam quibusdam perspiciatis, molestias praesentium tempore nulla quisquam. Quod labore, ipsam quam omnis quas ad eveniet cum blanditiis magni iure earum quibusdam maiores expedita, quo placeat at. Natus, fuga.</p>
                </div>
            </div>
        </div>
    </section>

    <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d33220.12683078888!2d105.47269741989778!3d53.041748169870395!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5da97fcefb53ea1d%3A0xd002ca73df439a3!2z0KjQvtGB0YHQtdC50L3QsNGPINGD0LsuLCAxMiwg0JHQsNGP0L3QtNCw0LksINCY0YDQutGD0YLRgdC60LDRjyDQvtCx0LsuLCA2NjkxMjA!5e0!3m2!1sru!2sru!4v1760114163684!5m2!1sru!2sru"
            width="100%" height="450" style="border:0; display: block;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">

    </iframe>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>