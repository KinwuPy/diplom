<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/templates/".SITE_TEMPLATE_ID."/header.php");
CJSCore::Init(array("fx"));

\Bitrix\Main\UI\Extension::load(["ui.bootstrap4", "ui.fonts.opensans"]);

if (isset($_GET["theme"]) && in_array($_GET["theme"], array("blue", "green", "yellow", "red")))
{
	COption::SetOptionString("main", "wizard_eshop_bootstrap_theme_id", $_GET["theme"], false, SITE_ID);
}
$theme = COption::GetOptionString("main", "wizard_eshop_bootstrap_theme_id", "green", SITE_ID);

$curPage = $APPLICATION->GetCurPage(true);

?><!DOCTYPE html>

<html xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?$APPLICATION->ShowTitle()?></title>
    <?
    $APPLICATION->AddHeadString('<link rel="preconnect" href="https://fonts.googleapis.com">');
    $APPLICATION->AddHeadString('<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>');
    $APPLICATION->AddHeadString('<link rel="shortcut icon" href="'.SITE_TEMPLATE_PATH.'/img/favicon.png" type="image/x-icon">');

    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/fonts.css');
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/bootstrap.css');
    $APPLICATION->SetAdditionalCSS('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css');
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/owlcarousel/owl.carousel.min.css');
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/owlcarousel/owl.theme.default.min.css');
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/main.css');

    $APPLICATION->ShowHead();
    ?>

    <?php
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/bootstrap.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/owlcarousel/owl.carousel.min.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/main.js');?>
</head>
<body>

<div class="wrapper">
    <? $APPLICATION->ShowPanel(); ?>
    <header class="header">
        <div class="header-top py-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 col-sm-4">
                        <div class="header-top-phone d-flex align-items-center h-100">
                            <i class="fa-solid fa-mobile-screen"></i>
                            <a href="tel:+1234567890" class="ms-2">123-456-7890</a>
                        </div>
                    </div>
                    <div class="col-sm-4 d-none d-sm-block">
                        <ul class="social-icons d-flex justify-content-center">
                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-telegram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-sm-4">
                        <div class="header-top-account d-flex justify-content-end">
                            <div class="btn-group me-2">
                                <div class="dropdown">
                                    <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Аккаунт
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="login.html">Вход</a></li>
                                        <li><a class="dropdown-item" href="register.html">Регистрация</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="btn-group">
                                <div class="dropdown">
                                    <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        RU
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">EN</a></li>
                                        <li><a class="dropdown-item" href="#">DE</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--./header-top-account-->
                    </div>
                </div>
            </div>
        </div><!--Header-top-->

        <div class="header-middle py-4">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <a href="/" class="header-logo h1">Удачный</a>
                    </div>

                    <!-- <div class="col-lg-4 order-md-2 cart-buttons text-end d-none d-lg-block">
                        <a href="#" class="btn p-1">
                            <i class="fa-solid fa-heart"></i>
                            <span class="badge text-bg-warning cart-badge bg-warning rounded-circle">3</span>
                        </a>

                        <button class="btn p-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <span class="badge text-bg-warning cart-badge bg-warning rounded-circle">5</span>
                        </button>
                    </div> -->
                    <!-- Старые кнопки. Вставь col-lg-4 в класс сверху и снизу перед col-sm-6, так же order-md-1 уже после и только снизу-->

                    <div class="col-sm-6 mt-2 mt-md-0">
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" name="s" placeholder="Поиск..." aria-label="Поиск..." aria-describedby="button-search">
                                <button class="btn btn-outline-warning" type="submit" id="button-search"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!--header-middle-->
    </header>

    <div class="header-bottom sticky-top" id="header-nav">
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-start" id="offcanvasNavbar" tabindex="-1" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Catalog</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/">Главная</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#advantages">Наши преимущества</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#featured">Рекомендуемые товары</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#new-products">Новинки</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">О нас</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                    Каталог
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="category.html">Shoes</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="category.html">Jeans</a>
                                    </li>
                                    <li class="nav-item dropend">
                                        <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                            Sportswear
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a class="dropdown-item" href="category.html">Men's Sportswear</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="category.html">Women's Sportswear</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="category.html">Baby's Sportswear</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="category.html">Coat</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div>
                    <a href="#" class="btn p-1">
                        <i class="fa-solid fa-heart"></i>
                        <span class="badge text-bg-warning cart-badge bg-warning rounded-circle">3</span>
                    </a>

                    <button class="btn p-1" id="cart-open" type="button" data-bs-toggle="offcanvas2" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span class="badge text-bg-warning cart-badge bg-warning rounded-circle">5</span>
                    </button>
                </div><!--mobile-cart-and-heart-->
            </div>
        </nav>
    </div><!--header-bottom-->

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCart" aria-labelledby="offcanvasCartLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasCartLabel">Cart</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="table-responsive">
                <table class="table offcanvasCart-table">
                    <tbody>
                    <tr>
                        <td class="product-img-td"><a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/img/products/astrohim.jpg" alt=""></a></td>
                        <td><a href="#">Astrohim Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus, voluptatem. Illum, vero.</a></td>
                        <td>650р</td>
                        <td>&times;1</td>
                        <td><button class="btn btn-danger"><i class="fa-regular fa-circle-xmark"></i></button></td>
                    </tr><!--1 product-->
                    <tr>
                        <td class="product-img-td"><a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/img/products/belt.jpg" alt=""></a></td>
                        <td><a href="#">Belt</a></td>
                        <td>550р</td>
                        <td>&times;2</td>
                        <td><button class="btn btn-danger"><i class="fa-regular fa-circle-xmark"></i></button></td>
                    </tr><!--2 product-->
                    <tr>
                        <td class="product-img-td"><a href="#"><img src="<?= SITE_TEMPLATE_PATH ?>/img/products/chain.jpg" alt=""></a></td>
                        <td><a href="#">Chain</a></td>
                        <td>450р</td>
                        <td>&times;3</td>
                        <td><button class="btn btn-danger"><i class="fa-regular fa-circle-xmark"></i></button></td>
                    </tr><!--3 product-->
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="4" class="text-end">Итого:</td>
                        <td>3100р</td>
                    </tr>
                    </tfoot>
                </table>
            </div>

            <div class="text-end mt-3">
                <a href="cart.html" class="btn btn-outline-warning">Cart</a>
                <a href="checkout.html" class="btn btn-outline-secondary">Checkout</a>
            </div>

            <div class="dropdown mt-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    Dropdown button
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item closecart" href="#about" data-href="about">О нас</a></li>
                    <li><a class="dropdown-item closecart" href="#map" data-href="map">Карта</a></li>
                    <li><a class="dropdown-item closecart" href="#footer" data-href="footer">Справка</a></li>
                </ul>
            </div>
        </div>
    </div><!--offcanvas-->

    <main class="main">
