<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<? if($arResult['ITEMS']): ?>
    <table class="table_sort">
        <thead>
        <tr>
            <th><?= GetMessage('NAME') ?></th>
            <th><?= GetMessage('GENERAL_INCOME') ?></th>
            <th><?= GetMessage('GENERAL_EXPENSES') ?></th>
            <th><?= GetMessage('NUM_PEOPLE') ?></th>
            <th><?= GetMessage('RATING_PEOPLE') ?></th>
            <th><?= GetMessage('RATING_INCOME') ?></th>
            <th><?= GetMessage('RATING_EXPENSES') ?></th>
        </tr>
        </thead>
        <tbody>
        <? foreach ($arResult['ITEMS'] as $arItem): ?>
            <tr>
                <td><?= $arItem['NAME'] ?></td>
                <? foreach ($arItem['PROPERTY'] as $arItemProperty): ?>
                    <td><?= $arItemProperty['VALUE'] ?></td>
                <? endforeach; ?>
            </tr>
        <? endforeach; ?>
        </tbody>
    </table>
<? endif;?>

