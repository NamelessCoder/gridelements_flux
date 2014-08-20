<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\FluidTYPO3\Flux\Core::registerConfigurationProvider('NamelessCoder\GridelementsFlux\Provider\GridelementsProvider');
\FluidTYPO3\Flux\Core::registerProviderExtensionKey('NamelessCoder.GridelementsFlux', 'CoreContent');