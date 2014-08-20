<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\FluidTYPO3\Flux\Core::registerConfigurationProvider('NamelessCoder\GridelementsFlux\Provider\GridelementsProvider');
\FluidTYPO3\Flux\Core::registerProviderExtensionKey('NamelessCoder.GridelementsFlux', 'CoreContent');

// add the CType "gridelements" to be handled by FluidcontentCore
$GLOBALS['TYPO3_CONF_VARS']['FluidTYPO3.FluidcontentCore']['types'][] = 'gridelemets_pi1';
