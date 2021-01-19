<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Main");
?><?$APPLICATION->IncludeComponent(
	"mxdzqr:table.list",
	"",
	Array(
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "test",
		"PROPERTY_CODE" => array("GENERAL_INCOME","GENERAL_EXPENSES","NUM_PEOPLE",""),
		"SORT" => "ASC"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>