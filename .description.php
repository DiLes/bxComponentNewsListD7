<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("T_IBLOCK_DESC_LIST_D7"),
	"DESCRIPTION" => GetMessage("T_IBLOCK_DESC_LIST_DESC_D7"),
	"ICON" => "/images/news_list.gif",
	"SORT" => 20,
	"CACHE_PATH" => "Y",
	"PATH" => array(
		"ID" => "test",
		"NAME" => GetMessage("T_IBLOCK_DESC_TEST_D7"),
		"CHILD" => array(
			"ID" => "test",
			"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_D7"),
			"SORT" => 10,
			"CHILD" => array(
				"ID" => "news_cmpx",
			),
		),
	),
);

?>