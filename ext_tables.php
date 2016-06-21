<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}











\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'cart',
	'Cart'
);


$pluginSignature = 'jz_cart_cart';
$locallang_db = 'LLL:EXT:jz_cart/Resources/Private/Language/locallang_db.xml:';



Gosign\GoBackend\Wizard\NewContentElement::addPluginToWizard(
	$pluginSignature,
	array (
		'icon' => '../' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::siteRelPath($_EXTKEY) . 'Resources/Public/Icons/slider-wizard.png',
		'title' => 'Cart System',
		'description' => 'Its my own basic cart system',
	)
);






