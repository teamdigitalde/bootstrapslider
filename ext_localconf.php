<?php
defined('TYPO3_MODE') || die();


\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'TeamDigital.' . $_EXTKEY,
    'Bootstrapslider',
    [
        'Bootstrapslider' => 'slider',
    ],
    // non-cacheable actions
    [
        'Bootstrapslider' => 'slider',
    ]
);

// Individuelle RTE-Konfiguration registrieren in der ext_localconf.php
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['custom'] = 'EXT:bootstrapslider/Configuration/RTE/custom.yaml';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    'mod.wizards.newContentElement.wizardItems.plugins {
	elements {
		bootstrapslider {
			icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . '/Resources/Public/Icons/modul_icon.png
			title = Bootstrapslider
			description = team digital Bootstrapslider
			tt_content_defValues {
				CType = list
				list_type = bootstrapslider_bootstrapslider
			}
		}
	}
}'
);
