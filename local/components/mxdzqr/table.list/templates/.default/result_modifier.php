<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/** @var CBitrixComponent $this */
/** @var array $arParams */
/** @var array $arResult */
/** @var string $componentPath */
/** @var string $componentName */
/** @var string $componentTemplate */
/** @global CDatabase $DB */
/** @global CUser $USER */
/** @global CMain $APPLICATION */

foreach ($arResult['ITEMS'] as $arItems) {
    foreach ($arItems as $arItem) {

        $arSort['PEOPLE'][$arItems['ID']] = $arItem['NUM_PEOPLE']['VALUE'];
        $arSort['INCOME'][$arItems['ID']] = $arItem['GENERAL_INCOME']['VALUE'];
        $arSort['EXPENSES'][$arItems['ID']] = $arItem['GENERAL_EXPENSES']['VALUE'];
    }
}

arsort($arSort['PEOPLE']);
arsort($arSort['INCOME']);
asort($arSort['EXPENSES']);

$arResult['SORT'] = $arSort;
unset($arSort);