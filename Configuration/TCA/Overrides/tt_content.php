<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

$aNewFields = array(
    'tx_bootstrapslider_slider' => array(
        'exclude' => 0,
        'label' => 'Slides',
        'config' => array(
            'type' => 'inline',
            'foreign_table' => 'tx_bootstrapslider_domain_model_bootstrapslider',
            'foreign_field' => 'tt_content',
            'foreign_sortby' => 'sorting',
            'maxitems' => 100,
            'minitems' => 0,
            'behaviour' => array(
                'localizationMode' => 'select',
                'localizeChildrenAtParentLocalization' => true,
            ),
            'appearance' => array(
                /* @todo locallang */
                'createNewRelationLinkTitle' => 'Hinzufügen',
                'newRecordLinkTitle' => 'Hinzufügen',
                'showPossibleLocalizationRecords' => 1,
                'showRemovedLocalizationRecords' => 1,
                'showAllLocalizationLink' => 1,
                'showSynchronizationLink' => 1,
                'useSortable' => true,
                'enabledControls' => array(
                    'info' => false,
                    'new' => true,
                    'dragdrop' => true,
                    'sort' => true,
                    'hide' => true,
                    'delete' => true,
                    'localize' => true,
                ),
            ),
        ),
    ),
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $aNewFields);
/*\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', [
    'tx_bootstrapslider_slider' => [
        'exclude' => 0,
        'label' => 'Slides',
        'config' => [
            'type' => 'inline',
            'foreign_table' => 'tx_bootstrapslider_domain_model_bootstrapslider',
            'foreign_field' => 'tt_content',
            'foreign_label' => 'name',
            'foreign_sortby' => 'sorting',
            'maxitems' => '100',
            'appearance' => [
                'collapseAll' => 0, // Auskommentieren, da es sonst immer als true interpretiert wird
                'expandSingle' => true,
                'newRecordLinkAddTitle' => 1,
                'newRecordLinkPosition' => 'both',
                'showAllLocalizationLink' => true,
                'showPossibleLocalizationRecords' => true,
            ],
            'behaviour' => [
                'localizationMode' => 'select',
            ],
        ]
    ],
]);*/
