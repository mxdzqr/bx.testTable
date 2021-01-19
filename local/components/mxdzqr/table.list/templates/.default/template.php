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
<b>Для сортировки нажмите на заголовок в таблице соответствующего столбца</b>
<br>
<br>
<span>Сортировка в столбце <b>"Место в рейтинге по средним доходам населения"</b> производится по правилу. Больше лучше</span>
<br>
<br>
<span>Сортировка в столбце <b>"Место по средним расходам населения"</b> производится по правилу. Меньше лучше</span>
<br>
<br>
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

                <? $positionPeople = array_search($arItem['ID'], array_keys($arResult['SORT']['PEOPLE'])); ?>
                <td><?= $positionPeople + 1 ?> из <?= count($arResult['SORT']['PEOPLE']) ?></td>
                <? unset($positionPeople); ?>

                <? $positionIncome = array_search($arItem['ID'], array_keys($arResult['SORT']['INCOME'])); ?>
                <td><?= $positionIncome + 1 ?> из <?= count($arResult['SORT']['INCOME']) ?></td>
                <? unset($positionIncome); ?>

                <? $positionExpenses = array_search($arItem['ID'], array_keys($arResult['SORT']['EXPENSES'])); ?>
                <td><?= $positionExpenses + 1 ?> из <?= count($arResult['SORT']['EXPENSES']) ?></td>
                <? unset($positionExpenses); ?>
            </tr>
        <? endforeach; ?>
        </tbody>
    </table>
<? endif;?>
