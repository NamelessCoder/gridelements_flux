<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_gridelements_backend_layout', array(
	\NamelessCoder\GridelementsFlux\Provider\GridelementsProvider::FIELDNAME_TEMPLATESOURCE => array(
		'label' => 'LLL:EXT:gridelements_flux/Resources/Private/Language/locallang.xlf:templateSource',
		'config' => array(
			'type' => 'text'
		)
	),
	\NamelessCoder\GridelementsFlux\Provider\GridelementsProvider::FIELDNAME_TEMPLATEFILE => array(
		'label' => 'LLL:EXT:gridelements_flux/Resources/Private/Language/locallang.xlf:templateFile',
		'config' => array(
			'type' => 'input'
		)
	)
));
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_gridelements_backend_layout', 'tx_gridelementsflux_templatesource,tx_gridelementsflux_templatefile');
