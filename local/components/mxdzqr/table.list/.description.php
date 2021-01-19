<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	'NAME' => GetMessage('LIST_NAME'),
	'DESCRIPTION' => GetMessage('LIST_DESCRIPTION'),
	'SORT' => 10,
    'CACHE_PATH' => 'Y',
	'PATH' => array(
		'ID' => 'utility',
	),
);
?>