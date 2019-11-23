<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Техподдержка");
?><?$APPLICATION->IncludeComponent(
	"bitrix:support.ticket", 
	".default", 
	array(
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"MESSAGES_PER_PAGE" => "20",
		"MESSAGE_MAX_LENGTH" => "70",
		"MESSAGE_SORT_ORDER" => "asc",
		"SEF_FOLDER" => "/eshop_app/support/",
		"SEF_MODE" => "Y",
		"SET_PAGE_TITLE" => "Y",
		"SET_SHOW_USER_FIELD" => array(
		),
		"SHOW_COUPON_FIELD" => "N",
		"TICKETS_PER_PAGE" => "50",
		"COMPONENT_TEMPLATE" => ".default",
		"SEF_URL_TEMPLATES" => array(
			"ticket_list" => "index.php",
			"ticket_edit" => "#ID#.php",
		)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>