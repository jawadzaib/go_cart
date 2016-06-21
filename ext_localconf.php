<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Jawad.' . $_EXTKEY,
	'cart',
	array(
		'Cart' => 'list',

	),
	// non-cacheable actions
	array(
		'Cart' => 'list',
	),
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);


// set pageOverlayFields
// $GLOBALS['TYPO3_CONF_VARS']['FE']['pageOverlayFields'] .= ' ,headline';