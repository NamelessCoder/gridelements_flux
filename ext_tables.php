<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_gridelements_backend_layout', array(
	'tx_gridelementsflux_templatesource' => array(
		'label' => 'LLL:EXT:gridelements_flux/Resources/Private/Language/locallang.xlf:templateSource',
		'config' => array(
			'type' => 'text'
		)
	),
	'tx_gridelementsflux_templatefile' => array(
		'label' => 'LLL:EXT:gridelements_flux/Resources/Private/Language/locallang.xlf:templateFile',
		'config' => array(
			'type' => 'input'
		)
	)
));
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_gridelements_backend_layout', 'tx_gridelementsflux_templatesource,tx_gridelementsflux_templatefile');
