<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<?$APPLICATION->SetPageProperty("BodyClass", "detail");
$arParams = array(
	"ORDERS_LIST_PATH" => SITE_DIR.'eshop_app/personal/orders/order_list.php',
	"SHOW_UPPER_BUTTONS" => false
	);
$arParams['MENU_ITEMS'] = array("PAYMENT"=>false, "DELIVERY"=>false, "STATUS_CHANGE"=>false);

$APPLICATION->IncludeComponent(
	'bitrix:sale.mobile.order.detail',
	'.default',
	$arParams,
	false
);
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>