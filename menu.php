<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php"); ?>
	<script type="text/javascript">
		app.enableSliderMenu(true);
	</script>
<?
if(!$USER->IsAuthorized()):
    $APPLICATION->IncludeComponent(
        'bitrix:mobileapp.menu',
        'mobile',
        array("MENU_FILE_PATH"=>SITE_DIR . "/eshop_app/.mobile_menu.php"),
        false,
        Array('HIDE_ICONS' => 'Y'));
else:
    $APPLICATION->IncludeComponent(
        'bitrix:mobileapp.menu',
        'mobile',
        array("MENU_FILE_PATH"=>SITE_DIR . "/eshop_app/.mobile_menu_auth.php"),
        false,
        Array('HIDE_ICONS' => 'Y'));
endif;

?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>