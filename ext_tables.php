<?php
defined('TYPO3_MODE') || die();
//use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'bootstrapslider',
    'Configuration/TypoScript',
    'Bootstrapslider'
);


\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'TeamDigital.bootstrapslider',
    'bootstrapslider',
    'Bootstrapslider',
    'EXT:bootstrapslider/Resources/Public/Icons/tx_bootstrapslider_bootstrapslider_pluginicon.png'
);


// Constants
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript('bootstrapslider','constants',' <INCLUDE_TYPOSCRIPT: source="FILE:EXT:bootstrapslider/Configuration/constants.txt">');

// Setup
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript('bootstrapslider','setup',' <INCLUDE_TYPOSCRIPT: source="FILE:EXT:bootstrapslider/Configuration/setup.txt">');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'tx_bootstrapslider_domain_model_bootstrapslider', 'Team Digital Bootstrapslider'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bootstrapslider_domain_model_bootstrapslider');

$extensionName = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase('bootstrapslider');
$pluginSignature = strtolower($extensionName) . '_bootstrapslider';
$TCA['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature] = 'layout,select_key,pages,recursive';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'tx_bootstrapslider_slider,pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:bootstrapslider/Configuration/FlexForms/flexform.xml');
