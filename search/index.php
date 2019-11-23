<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поиск");
?><?$APPLICATION->IncludeComponent("bitrix:search.page", "MobileSearch", Array(
	"AJAX_MODE" => "Y",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "Y",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "Y",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "N",	// Искать только в активных по дате документах
		"COMPOSITE_FRAME_MODE" => "A",	// Голосование шаблона компонента по умолчанию
		"COMPOSITE_FRAME_TYPE" => "AUTO",	// Содержимое компонента
		"DEFAULT_SORT" => "rank",	// Сортировка по умолчанию
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под результатами
		"DISPLAY_TOP_PAGER" => "Y",	// Выводить над результатами
		"FILTER_NAME" => "",	// Дополнительный фильтр
		"NAME_TEMPLATE" => "",
		"NO_WORD_LOGIC" => "N",	// Отключить обработку слов как логических операторов
		"PAGER_SHOW_ALWAYS" => "Y",	// Выводить всегда
		"PAGER_TEMPLATE" => "",	// Название шаблона
		"PAGER_TITLE" => "Результаты поиска",	// Название результатов поиска
		"PAGE_RESULT_COUNT" => "50",	// Количество результатов на странице
		"PATH_TO_SONET_MESSAGES_CHAT" => "/company/personal/messages/chat/#USER_ID#/",
		"PATH_TO_USER_PROFILE" => "",	// Шаблон пути к профилю пользователя
		"RATING_TYPE" => "",	// Вид кнопок рейтинга
		"RESTART" => "N",	// Искать без учета морфологии (при отсутствии результата поиска)
		"SHOW_LOGIN" => "Y",
		"SHOW_RATING" => "",	// Включить рейтинг
		"SHOW_WHEN" => "N",	// Показывать фильтр по датам
		"SHOW_WHERE" => "N",	// Показывать выпадающий список "Где искать"
		"STRUCTURE_FILTER" => "structure",
		"USE_LANGUAGE_GUESS" => "N",	// Включить автоопределение раскладки клавиатуры
		"USE_SUGGEST" => "Y",	// Показывать подсказку с поисковыми фразами
		"USE_TITLE_RANK" => "N",	// При ранжировании результата учитывать заголовки
		"arrFILTER" => array(	// Ограничение области поиска
			0 => "iblock_catalog",
			1 => "iblock_offers",
		),
		"arrWHERE" => "",
		"COMPONENT_TEMPLATE" => "clear",
		"SHOW_ITEM_TAGS" => "Y",	// Показывать теги документа
		"TAGS_INHERIT" => "Y",	// Сужать область поиска
		"SHOW_ITEM_DATE_CHANGE" => "Y",	// Показывать дату изменения документа
		"SHOW_ORDER_BY" => "Y",	// Показывать сортировку
		"SHOW_TAGS_CLOUD" => "N",	// Показывать облако тегов
		"TAGS_SORT" => "NAME",
		"TAGS_PAGE_ELEMENTS" => "150",
		"TAGS_PERIOD" => "",
		"TAGS_URL_SEARCH" => "",
		"FONT_MAX" => "50",
		"FONT_MIN" => "10",
		"COLOR_NEW" => "000000",
		"COLOR_OLD" => "C8C8C8",
		"PERIOD_NEW_TAGS" => "",
		"SHOW_CHAIN" => "Y",
		"COLOR_TYPE" => "Y",
		"WIDTH" => "100%",
		"arrFILTER_iblock_catalog" => array(	// Искать в информационных блоках типа "iblock_catalog"
			0 => "all",
		),
		"arrFILTER_iblock_offers" => array(	// Искать в информационных блоках типа "iblock_offers"
			0 => "all",
		)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>