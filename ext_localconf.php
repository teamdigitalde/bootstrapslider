<?php
defined('TYPO3_MODE') || die();


\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'TeamDigital.bootstrapslider',
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

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:bootstrapslider/Configuration/TSconfig/ContentElementWizard.txt">');
if (TYPO3_MODE === 'BE') {
    $icons = [
        'ext-bootstrapslider-wizard-icon' => 'modul_icon.png',
        'ext-bootstrapslider-image' => 'modul_icon.png',
    ];
    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    foreach ($icons as $identifier => $path) {
        $iconRegistry->registerIcon(
            $identifier,
            \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
            ['source' => 'EXT:bootstrapslider/Resources/Public/Icons/' . $path]
        );
    }
}
