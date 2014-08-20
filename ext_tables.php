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
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', 'pi_flexform', 'gridelements_pi1');

$hookIndex = array_search(
	'EXT:gridelements/Classes/Hooks/BackendUtility.php:GridElementsTeam\\Gridelements\\Hooks\\BackendUtility',
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_befunc.php']['getFlexFormDSClass']
);
unset(
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_befunc.php']['getFlexFormDSClass'][$hookIndex],
	$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds']['*,gridelements_pi1'],
	$GLOBALS['TCA']['tt_content']['columns']['pi_flexform_ds'],
	$GLOBALS['TCA']['tt_content']['columns']['pi_flexform_ds_file'],
	$hookIndex
);


