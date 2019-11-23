<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
    die();
}

IncludeModuleLangFile($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/mobileapp/public/.mobile_menu.php");
$arMobileMenuItems = array(
    array(
        "type" => "section",
        "text" => 'Интернет-магазин',
        "sort" => "100",
        "items" => array(
            array(
                "text" => 'Главная',
                "data-url" => SITE_DIR . "eshop_app/index.php",
                "class" => "menu-item",
                "id" => "main",

            ),
            array(
                "text" => 'Каталог товаров',
                "data-url" => SITE_DIR . "eshop_app/catalog/",
                "class" => "menu-item",
                "id" => "point2",

            ),

        )
    )
);
$arMobileMenuItems[] = array(
    "type" => "section",
    "text" => 'Персональный раздел',
    "sort" => "200",
    "items" => array(
        array(
            "text" => 'Мои заказы',
            "data-url" => SITE_DIR . "eshop_app/personal/orders/order_list.php",
            "class" => "",
            "id" => "",
        ),
        array(
            "text" => 'Написать в техподдержку',
            "data-url" => SITE_DIR . "eshop_app/support/",
            "class" => "",
            "id" => "",
        ),
        array(
            "text" => 'Выйти',
            "data-url" => SITE_DIR . "eshop_app/index.php?logout=yes",
            "class" => "",
            "id" => "",
        ),
    )
);

$arMobileMenuItems[] = array(
    "type" => "section",
    "text" => 'Правовая информация',
    "sort" => "200",
    "items" => array(
        array(
            "text" => 'О приложении',
            "data-url" => SITE_DIR . "eshop_app/staticpages/aboutapp.php",
            "class" => "",
            "id" => "",
        ),
        array(
            "text" => 'Политика конфеденциальности',
            "data-url" => SITE_DIR . "eshop_app/staticpages/confedencial.php",
            "class" => "",
            "id" => "",
        )
    )
);
?>